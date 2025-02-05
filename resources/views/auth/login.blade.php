@extends('auth.auth-layout')

{{-- Définition du titre de la page --}}
@section('title', "Page de connexion")

{{-- Début de la section du formulaire d'authentification --}}
@section('auth-form')
    <h1>Connexion</h1>
    <p class="account-subtitle">Accéder au dashboard</p>

    {{-- Formulaire de connexion --}}
    <form action="{{ route('login') }}" method="POST">
        {{-- Protection CSRF pour sécuriser le formulaire contre les attaques --}}
        @csrf

        {{-- Champ pour l'adresse e-mail --}}
        <div class="form-group">
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        </div>
        {{-- Affichage des erreurs de validation pour l'email --}}
        @error('email')
            <p class="text-red-500 mt-2">{{ $message }}</p>
        @enderror

        {{-- Champ pour le mot de passe --}}
        <div class="form-group">
            <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Mot de passe">
        </div>
        {{-- Affichage des erreurs de validation pour le mot de passe --}}
        @error('password')
            <p class="text-red-500 mt-2">{{ $message }}</p>
        @enderror

        {{-- Bouton de soumission du formulaire --}}
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
        </div>
    </form>

    {{-- Lien pour la récupération du mot de passe en cas d'oubli --}}
    <div class="text-center forgotpass">
        <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
    </div>
@endsection
