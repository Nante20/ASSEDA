<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\PaymentIntent;

class DonationController extends Controller
{
    public function showForm()
{
    return view('donate');
}

public function processPayment (Request $request)
{

    // Validation des données envoyées par le formulaire
    $request->validate([
        'amount' => 'required|numeric|min:1',
        'email' => 'required|email',
        'stripeToken' => 'required', // Le PaymentMethod ID envoyé par Stripe
    ]);

    \Stripe\Stripe::setApiKey(config('services.stripe.secret')); // Clé API secrète Stripe

    try {
        // Récupérer l'ID du PaymentMethod (stripeToken) envoyé depuis le frontend
        $paymentMethodId = $request->input('stripeToken'); // Cette ligne récupère l'ID du PaymentMethod

        // Créer le PaymentIntent
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $request->input('amount') * 100, // Montant en centimes
            'currency' => 'eur', // Devise
            'payment_method' => $paymentMethodId, // L'ID du PaymentMethod
            'automatic_payment_methods' => [
                'enabled' => true,
                'allow_redirects' => 'never', // Désactive les redirections
            ],
            'confirm' => true, // Confirmer immédiatement
        ]);


        // Vérifier le statut du PaymentIntent
        if ($paymentIntent->status === 'succeeded') {
            return redirect()->route('donation.success')->with('success', 'Merci pour votre don !');
        } else {
            return redirect()->route('donation.form')->withErrors(['error' => 'Le paiement n\'a pas pu être complété.']);
        }
    } catch (\Stripe\Exception\CardException $e) {
        // Gestion des erreurs Stripe (par exemple carte refusée)
        return redirect()->back()->withErrors(['error' => $e->getError()->message]);
    } catch (\Exception $e) {
        // Gestion d'autres erreurs générales
        return redirect()->back()->withErrors(['error' => 'Erreur lors du traitement du paiement : ' . $e->getMessage()]);
    }
}
}
