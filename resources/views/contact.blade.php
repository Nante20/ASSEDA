@extends('welcome')

@section('titre', "Nous contacter")
@section('meta_description', "Découvrez ASSEDA, une association basée à Oullins dédiée à aider les migrants, offrant un soutien précieux aux familles en difficulté.")
@section('meta_keywords', 'ASSEDA, aide migrants, don, association, solidarité, Oullins, familles en difficulté')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4 text-center">Contactez-nous</h2>

            <!-- Affichage des erreurs -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulaire -->
            <form action="{{ route('contactSend') }}" method="post" class="bg-light p-4 rounded shadow">
                @csrf

                <!-- Nom -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message :</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>

                <!-- Case à cocher pour accepter la politique -->
                <div class="mb-3 form-check">
                    <input type="checkbox" id="accept_policy" name="accept_policy" class="form-check-input" value="1" required>
                    <label for="accept_policy" class="form-check-label">
                        J'accepte la <a href="{{ route('policy') }}" target="_blank">politique d'utilisation des données</a>.
                    </label>
                </div>

                <!-- Bouton d'envoi -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

