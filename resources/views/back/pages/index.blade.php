<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  </head>
<br>
<br>
<body>
    <div class="container my-5">
        <!-- En-tête principale -->
        <h1 class="text-center mb-4">Dashboard</h1>

        <!-- Menu de navigation -->
        <nav class="nav nav-pills mb-4">
            <a class="nav-link active" href="{{ route('dashboard') }}">Gérer les pages</a>
            <a class="nav-link" href="{{ route('back.messages.index') }}">Gérer les messages</a>
            <a class="nav-link" href="{{ route('donations.index') }}">Liste des dons</a>
        </nav>

        <!-- Contenu principal du Dashboard : Gérer les pages -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title mb-0">Gérer les pages</h2>
                <!-- Bouton pour créer une nouvelle page -->
                <a href="{{ route('pages.create') }}" class="btn btn-success btn-sm">+ Nouvelle page</a>
            </div>
            <div class="card-body">
                <!-- Le contenu principal de "Gérer les pages" -->
                <p class="mb-4">Bienvenue dans la section "Gérer les pages". Ici, vous pouvez voir, créer, modifier et supprimer des pages principales de votre site.</p>

                <!-- Le tableau pour Gérer les pages -->
                <table class="table table-bordered table-striped">
                    <thead style="background-color: black; color: rgb(0, 229, 255);">
                        <tr>
                            <th>Titre de la page</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
<body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélectionnez tous les formulaires de suppression
            document.querySelectorAll('form').forEach(form => {
                // Vérifiez si le formulaire contient un bouton de suppression
                const deleteButton = form.querySelector('button[type="submit"].btn-danger');
                if (deleteButton) {
                    // Ajoutez un écouteur d'événement
                    deleteButton.addEventListener('click', function(event) {
                        if (!confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
                            event.preventDefault(); // Annulez l'action si l'utilisateur annule
                        }
                    });
                }
            });
        });
    </script>

