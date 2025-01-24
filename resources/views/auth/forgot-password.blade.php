@extends('auth.auth-layout')
@section('title', "Page de réinitialisation de mot de passe")
@section('auth-form')
<h1>Mot de passe oublié?</h1>
							<p class="account-subtitle">Entrez votre email pour obtenir le lien de réinitialisation</p>
                            @if (session('status'))
                            <div class="alert alert-success mb-4 text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
							<form action="{{ route('password.email') }}" method="POST">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="email" name="email" placeholder="Email"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Recevoir le lien</button>
								</div>
							</form>
							<div class="text-center dont-have">Vous vous souvenez de votre mot de passe? <a href="{{ route('login') }}">Se connecter</a></div>
@endsection
