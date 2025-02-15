<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h3>Message envoyé avec succès</h3>
        </div>
        <div class="card-body">
            <p>Merci de nous avoir contacté! Votre message a bien été enregistré, nous vous recontacterons dès que possible.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
</div>
</body>
</html>
