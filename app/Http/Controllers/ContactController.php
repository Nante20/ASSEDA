<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Effectuer une action (ex. envoyer un e-mail, enregistrer en base de données, etc.)
        ContactMessage::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
            'accept_policy' => 'accepted', // Validation pour la case à cocher
        ]);


        // Retourner une vue ou rediriger
        return view('contactSend'); // Ou redirect()->route('nomRoute');
    }
}
