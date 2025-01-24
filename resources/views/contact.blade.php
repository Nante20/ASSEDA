@extends('welcome')
@section('titre', "Nous contacter")
@section('meta_description', "Découvrez ASSEDA, une association basée à Oullins dédiée à aider les migrants, offrant un soutien précieux aux familles en difficulté.")
@section('meta_keywords', 'ASSEDA, aide migrants, don, association, solidarité, Oullins, familles en difficulté')
@section('content')
<div class="contact-container">
    <div class="contact-form">
        <h2>Contactez-nous</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('contactSend') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <!-- Case à cocher pour accepter la politique -->
            <div class="form-group">
                 <input type="checkbox" id="accept_policy" name="accept_policy" value="1" required>
                 <label for="accept_policy">
                 J'accepte la <a href="{{ route('policy') }}" target="_blank">politique d'utilisation des données</a>.
                 </label>
            </div>

            <div class="form-group">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>
@endsection
