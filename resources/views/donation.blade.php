<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès du paiement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="don">
    <div>
        <div class="thank-you-icon">✔️</div>
        <h1>Merci pour votre don !</h1>
        <p>Votre paiement a été effectué avec succès.</p>
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Retour à la page d'accueil</a>
    </div>
</body>
</html>
