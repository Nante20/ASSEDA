<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    // Méthode pour gérer l'envoi d'un formulaire de contact
    public function send(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            // Le champ 'name' est requis, doit être une chaîne de caractères et ne peut pas dépasser 255 caractères
            'name' => 'required|string|max:255',
            // Le champ 'email' est requis et doit être une adresse email valide
            'email' => 'required|email',
            // Le champ 'message' est requis et doit être une chaîne de caractères
            'message' => 'required|string',
        ]);

        // Enregistrer les données validées dans la base de données
        ContactMessage::create([
            // Stocker le nom envoyé dans le champ 'name'
            'name' => $validatedData['name'],
            // Stocker l'email envoyé dans le champ 'email'
            'email' => $validatedData['email'],
            // Stocker le message envoyé dans le champ 'message'
            'message' => $validatedData['message'],
            // Définir le statut du message comme "non lu"
            'statut' => ContactMessage::STATUT_NON_LU,
            // Ajouter un indicateur d'acceptation de la politique
            'accept_policy' => 'accepted', // Validation pour la case à cocher
        ]);

        // Retourner une vue pour confirmer l'envoi ou rediriger l'utilisateur
        return view('contactSend'); // Ou redirect()->route('nomRoute');
    }
}
