@extends('welcome')

@section('titre', "Nous soutenir")
@section('meta_description', "Découvrez ASSEDA, une association basée à Oullins dédiée à aider les migrants, offrant un soutien précieux aux familles en difficulté.")
@section('meta_keywords', 'ASSEDA, aide migrants, don, association, solidarité, Oullins, familles en difficulté')

@section('content')
<div class="container container-support">
    <!-- Conteneur des colonnes -->
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h1 class="mb-4">Nous avons besoin de vous et de vos participations</h1>
            <img src="{{ asset('images/soutenir.jpg') }}" class="img-fluid rounded shadow-sm mb-4" alt="image">
            <p>Vous pouvez nous aider :</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>🏠 Louez votre logement :</strong> Si vous êtes propriétaire d'un petit logement inoccupé, louez-le à l'association à un tarif modéré.
                </li>
                <li class="list-group-item">
                    <strong>💰 Participez au loyer solidaire :</strong> Un prélèvement mensuel de 10€, 20€, 30€ ou plus pour héberger une famille.
                </li>
                <li class="list-group-item">
                    <strong>🎁 Faites un don ponctuel :</strong> Vos dons nous permettent d'aider à la vie quotidienne (bus, médicaments...).
                </li>
                <li class="list-group-item">
                    <strong>🏡 Hébergez temporairement :</strong> Accueillez des personnes suivies par l'association ponctuellement.
                </li>
                <li class="list-group-item">
                    <strong>🤝 Suivez une famille :</strong> Créez un lien avec une famille pour l’aider.
                </li>
                <li class="list-group-item">
                    <strong>📅 Participez aux événements :</strong> Engagez-vous dans nos actions.
                </li>
            </ul>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 class="mb-4">Vous voulez nous soutenir ? (réduction d'impôt pouvant aller jusqu'à 75%)</h2>
            <div class="mb-4">
                <a href="{{ route('donate.form') }}" class="btn btn-primary btn-lg">Faites un don ici !</a>
            </div>
            <div class="border-rounded-box">
                <h3 class="section-title mb-3">📜 Faites un don par chèque</h3>
                <p>
                    Envoyez votre chèque avec votre adresse postale pour recevoir un reçu fiscal :
                    <strong>ASSEDA, 13 rue Pasteur, 69600 Oullins</strong>
                </p>

                <h3 class="section-title mt-4 mb-3">💳 Participez au loyer solidaire</h3>
                <p>
                    Faites un virement mensuel de 10€, 20€ ou plus.
                    <a href="https://www.asseda.fr/_files/ugd/10c70c_992d54bc701146c3bf10cfecc0a42716.pdf" target="_blank">
                        📥 Téléchargez la plaquette d'information
                    </a> (avec le RIB de l'association).
                </p>

                <h3 class="section-title mt-4 mb-3">📝 Adhérez</h3>
                <p>
                    <a href="{{ asset('images/bulletin_adhesion (4).doc') }}" class="btn btn-link">📄 Téléchargez le bulletin d'adhésion</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
