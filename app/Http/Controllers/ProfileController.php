<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Affiche le formulaire d'édition du profil utilisateur.
     *
     * @param Request $request
     * @return View
     */
    public function edit(Request $request): View
    {
        // Retourne la vue "profile.edit" avec les informations de l'utilisateur connecté
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Met à jour les informations du profil utilisateur.
     *
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Remplit les informations de l'utilisateur avec les données validées du formulaire
        $request->user()->fill($request->validated());

        // Si l'email est modifié, réinitialise la vérification de l'email
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Vérifie si une image a été téléchargée
        if ($request->hasFile('image')) {
            // Supprime l'ancienne image si elle existe
            if (file_exists(public_path('back_auth/assets/profile' . $request->user()->image)) && !empty($request->user()->image)) {
                unlink(public_path('back_auth/assets/profile' . $request->user()->image));
            }

            // Génère un nouveau nom de fichier basé sur la date et l'heure
            $ext = $request->file('image')->extension();
            $file_name = date('YmdHis') . '.' . $ext;

            // Déplace le fichier téléchargé dans le répertoire des profils
            $request->file('image')->move(public_path('back_auth/assets/profile'), $file_name);

            // Met à jour le champ "image" de l'utilisateur
            $request->user()->image = $file_name;
        }

        // Met à jour les autres champs du profil utilisateur
        $request->user()->name = $request->name;
        $request->user()->email = $request->email;

        // Sauvegarde les modifications dans la base de données
        $request->user()->save();

        // Redirige l'utilisateur vers la page d'édition du profil avec un message de succès
        return Redirect::route('profile.edit')->with('status', 'Profile modifie avec succes');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
