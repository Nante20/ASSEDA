@extends('welcome')
@section('titre', "Nous soutenir")
@section('content')
<div class="container">
    <!-- Conteneur des colonnes -->
    <div class="columns">
        <!-- Première colonne -->
        <div class="column">
            <h1>Nous avons besoin de vous et de vos participations</h1>
            <img src="images/soutenir.jpg" class="img-thumbnail" alt="image">
            <p>Vous pouvez nous aider :</p>
                <ul>
                    <li>si vous êtes propriétaire d'un petit logement inoccupé, en le louant à l'association à un tarif modéré (l'association vous garantit de le libérer quand vous le souhaitez, et de veiller au respect des lieux). Nous RECHERCHONS des PETITS APPARTEMENTS sur Oullins ou aux environs.</li>
                    <li>en participant au loyer solidaire : un prélèvement mensuel de 10€, 20€, 30€ ou plus pour nous permettre de louer un appartement pour héberger une famille. Actuellement nous louons 3 appartements dans lesquels sont logées 3 familles.</li>
                    <li>en faisant un don ponctuel à l'association : les dons ponctuels nous permettent d'aider à la vie quotidienne (bus, médicaments, ...)</li>
                    <li>en accueillant des personnes suivies par l'association ponctuellement ou en alternance avec d'autres membres de l'association</li>
                    <li>en acceptant de suivre une famille : liens, conseils, ...</li>
                    <li>en participant aux différentes actions que nous organisons</li>
                </ul>

            </div>
         <div class="column">
                <h2>Vous voulez nous soutenir? (réduction d'impôt pouvant aller jusqu'à 75%)</h2>
            <div class="intro">
                <a href="{{ route('donate.form') }}"><button>Faites un don ici!</button></a>
            </div>
                <div class="slider-container">
                    <div class="slider">
                        <p>
                        <h3>Faites un don par chèque</h3>
                        Envoyez votre chèque accompagné de votre adresse postale pour que nous puissions vous envoyer le reçu fiscal : ASSEDA 13 rue Pasteur 69600 Oullins
                        </p>
                        <p>
                        <h3>Participez au loyer solidaire</h3>
                        Pour participer au loyer solidaire, vous pouvez faire un virement mensuel de 10€, 20€ ou plus. <a href="https://www.asseda.fr/_files/ugd/10c70c_992d54bc701146c3bf10cfecc0a42716.pdf" target="_blank">Téléchargez la plaquette d'information</a>(nb: contient le RIB de l'association)
                        </p>
                        <p>
                        <h3>Adhérez</h3>
                        <a href="images/bulletin_adhesion (4).doc">Téléchargez le bulletin d'adhésion</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
