<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire un don</title>
    <script src="https://js.stripe.com/v3/"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="donne">
        <h1>Faire un don</h1>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <ul style="color: red;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('donate.process') }}" method="POST" id="payment-form">
            @csrf
            <label for="amount">Montant (en €) :</label>
            <input type="number" id="amount" name="amount" min="1" required>

            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>

            <div id="card-element">
                <!-- Stripe Card Element -->
            </div>
            <div id="card-errors" role="alert" style="color: red;"></div>
            <button id="submit-button">Donner</button>
        </form>
    </div>

    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');
const elements = stripe.elements();

const card = elements.create('card');
card.mount('#card-element');

const form = document.getElementById('payment-form');
form.addEventListener('submit', async (event) => {
    event.preventDefault();

    // Désactiver le bouton pour éviter des clics multiples
    const submitButton = document.getElementById('submit-button');
    submitButton.disabled = true;

    // Créer le PaymentMethod
    const { paymentMethod, error } = await stripe.createPaymentMethod({
        type: 'card',
        card: card,
    });

    if (error) {
        console.error("Erreur lors de la création du PaymentMethod :", error.message);
        alert("Erreur : " + error.message);
        submitButton.disabled = false; // Réactiver le bouton en cas d'erreur
    } else {
        // Ajouter stripeToken au formulaire
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', paymentMethod.id);
        form.appendChild(hiddenInput);

        // Soumettre le formulaire
        form.submit();
    }
});

    </script>
</body>
</html>
