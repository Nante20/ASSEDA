<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire un don</title>

    <!-- Inclusion de la bibliothèque Stripe -->
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Inclusion des fichiers CSS et JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="donne">
        <h1>Faire un don</h1>

        <!-- Affichage d'un message de succès si le don est validé -->
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <!-- Affichage des erreurs si des problèmes surviennent -->
        @if($errors->any())
            <ul style="color: red;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <!-- Formulaire de don -->
        <form action="{{ route('donate.process') }}" method="POST" id="payment-form">
            @csrf

            <!-- Champ pour entrer le montant du don -->
            <label for="amount">Montant (en €) :</label>
            <input type="number" id="amount" name="amount" min="1" required>

            <!-- Champ pour entrer l'adresse email du donateur -->
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>

            <!-- Élément Stripe pour la saisie des informations de carte bancaire -->
            <div id="card-element"></div>
            <div id="card-errors" role="alert" style="color: red;"></div>

            <!-- Bouton de soumission du formulaire -->
            <button id="submit-button">Donner</button>
        </form>

    </div>

    <script>
        // Initialisation de Stripe avec la clé publique
        const stripe = Stripe('{{ config('services.stripe.key') }}');
        const elements = stripe.elements();

        // Création de l'élément de carte
        const card = elements.create('card');
        card.mount('#card-element');

        // Gestion de la soumission du formulaire
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            // Désactiver le bouton pour éviter des clics multiples
            const submitButton = document.getElementById('submit-button');
            submitButton.disabled = true;

            // Création du PaymentMethod avec Stripe
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: card,
            });

            if (error) {
                // Affichage d'une erreur si la création du PaymentMethod échoue
                console.error("Erreur lors de la création du PaymentMethod :", error.message);
                alert("Erreur : " + error.message);
                submitButton.disabled = false; // Réactiver le bouton en cas d'erreur
            } else {
                // Ajouter l'ID du PaymentMethod comme un champ caché dans le formulaire
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
