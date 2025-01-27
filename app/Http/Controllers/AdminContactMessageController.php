<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class AdminContactMessageController extends Controller
{
    // Afficher les messages dans le dashboard
    public function index()
    {
        $messages = ContactMessage::with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('back.messages.index', compact('messages'));
    }

    // Marquer un message comme lu
    public function markAsRead(Request $request, $id)
    {
        // Vérifiez si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour effectuer cette action.');
        }

        $message = ContactMessage::findOrFail($id);

        $message->update([
            'statut' => ContactMessage::STATUT_LU,
            'user_id' => Auth::id() ?? null, // Associer l'utilisateur connecté
        ]);

        return redirect()->route('back.messages.index')->with('success', 'Message marqué comme lu.');
    }
}

