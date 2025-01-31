@extends('welcome')

@section('titre', "Nous soutenir")
@section('meta_description', "Découvrez ASSEDA, une association basée à Oullins dédiée à aider les migrants, offrant un soutien précieux aux familles en difficulté.")
@section('meta_keywords', 'ASSEDA, aide migrants, don, association, solidarité, Oullins, familles en difficulté')

@section('content')
<div class="container py-5">
    <!-- Conteneur des colonnes -->
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h1 class="mb-4">Nous avons besoin de vous et de vos participations</h1>
            <img src="{{ asset('images/soutenir.jpg') }}" class="img-fluid rounded mb-4" alt="image">
            <p>Vous pouvez nous aider :</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Si vous êtes propriétaire d'un petit logement inoccupé, en le louant à l'association à un tarif modéré
                    (l'association vous garantit de le libérer quand vous le souhaitez, et de veiller au respect des lieux).
                    Nous RECHERCHONS des PETITS APPARTEMENTS sur Oullins ou aux environs.
                </li>
                <li class="list-group-item">
                    En participant au loyer solidaire : un prélèvement mensuel de 10€, 20€, 30€ ou plus pour nous permettre de louer un appartement pour héberger une famille.
                    Actuellement nous louons 3 appartements dans lesquels sont logées 3 familles.
                </li>
                <li class="list-group-item">
                    En faisant un don ponctuel à l'association : les dons ponctuels nous permettent d'aider à la vie quotidienne (bus, médicaments, ...)
                </li>
                <li class="list-group-item">
                    En accueillant des personnes suivies par l'association ponctuellement ou en alternance avec d'autres membres de l'association.
                </li>
                <li class="list-group-item">
                    En acceptant de suivre une famille : liens, conseils, ...
                </li>
                <li class="list-group-item">
                    En participant aux différentes actions que nous organisons.
                </li>
            </ul>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 class="mb-4">Vous voulez nous soutenir ? (réduction d'impôt pouvant aller jusqu'à 75%)</h2>
            <div class="mb-4">
                <a href="{{ route('donate.form') }}" class="btn btn-primary btn-lg">Faites un don ici !</a>
            </div>
            <div class="border rounded p-3 bg-light">
                <h3 class="mb-3">Faites un don par chèque</h3>
                <p>
                    Envoyez votre chèque accompagné de votre adresse postale pour que nous puissions vous envoyer le reçu fiscal :
                    <strong>ASSEDA, 13 rue Pasteur, 69600 Oullins</strong>
                </p>

                <h3 class="mt-4 mb-3">Participez au loyer solidaire</h3>
                <p>
                    Pour participer au loyer solidaire, vous pouvez faire un virement mensuel de 10€, 20€ ou plus.
                    <a href="https://www.asseda.fr/_files/ugd/10c70c_992d54bc701146c3bf10cfecc0a42716.pdf" target="_blank">
                        Téléchargez la plaquette d'information
                    </a> (nb: contient le RIB de l'association).
                </p>

                <h3 class="mt-4 mb-3">Adhérez</h3>
                <p>
                    <a href="{{ asset('images/bulletin_adhesion (4).doc') }}" class="btn btn-link">Téléchargez le bulletin d'adhésion</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
