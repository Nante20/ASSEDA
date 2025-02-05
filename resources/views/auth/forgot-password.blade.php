@extends('auth.auth-layout')

@section('title', "Page de réinitialisation de mot de passe")

@section('auth-form')
    <!-- Titre de la page -->
    <h1>Mot de passe oublié?</h1>
    <p class="account-subtitle">Entrez votre email pour obtenir le lien de réinitialisation</p>

    <!-- Affichage d'un message de succès si l'email de réinitialisation a été envoyé -->
    @if (session('status'))
        <div class="alert alert-success mb-4 text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <!-- Formulaire de demande de réinitialisation de mot de passe -->
    <form action="{{ route('password.email') }}" method="POST">
        @csrf <!-- Jeton de sécurité CSRF -->

        <div class="form-group">
            <!-- Champ de saisie de l'email -->
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group mb-0">
            <!-- Bouton pour envoyer la demande -->
            <button class="btn btn-primary btn-block" type="submit">Recevoir le lien</button>
        </div>
    </form>

    <!-- Lien de retour à la page de connexion -->
    <div class="text-center dont-have">Vous vous souvenez de votre mot de passe?
        <a href="{{ route('login') }}">Se connecter</a>
    </div>
@endsection
