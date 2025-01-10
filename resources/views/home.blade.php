@extends('welcome')
@section('titre', "Accueil")
@section('content')
<div class="container intro">
     <div class="row mt-4">
        <div class="col-md-8">
            <h2>L'ASSEDA en quelques mots</h2>
        </div>
        <!-- Colonne pour le texte -->
        <div class="col-md-8">
            <p>
                L’ASSEDA est une petite association se trouvant sur Oullins et qui œuvre spécialement dans l'aide aux migrants. Nous soutenons principalement les familles qui sont déboutées après une demande d'asile. Donc, nous les aidons pour la procédure pour obtenir un titre de séjour. La plupart des familles viennent d’Albanie, du Congo, de Russie, d’Angola, de Madagascar, du Cameroun... Ces familles n’ont pas souvent de ressources et n’ont pas le droit de travailler.
            </p>
            <img src="{{ asset('images/solidarite.jpg') }}" alt="Solidarite" class="img-fluid my-4">
            <p>
                Elles essayent de survivre avec l'aide des restos du cœur, de la maison de la métropole et du secours populaire ou catholique. L'association ne dispose pas de subvention. Nous fonctionnons grâce à des dons qui nous permettent de louer des appartements à Oullins où nous plaçons les familles en difficultés à l’abri. Nous cherchons ainsi des logements « solidaires » avec des loyers moins chers pour aider plus de personnes.
            </p>
            <p>
                À noter que vous pouvez venir nous rencontrer lors de nos permanences chaque vendredi de 14h à 17h à Saint Viateur, 3 rue Henri Barbusse à Oullins.
            </p>
        </div>

        <!-- Colonne pour le bouton de don -->
        <div class="col-md-4 text-center">
            <div class="donation-box p-4 border rounded bg-light">
                <h2 class="mb-3">Aidez-nous</h2>
                <p>
                    Vos dons permettent de soutenir des familles en difficulté et de leur offrir un toit.
                </p>
                <!-- Bouton de don agrandi -->
                <a href="{{ route('donate.form') }}" class="btn btn-primary btn-lg btn-block py-3" style="font-size: 1.5rem;">
                    Faites un don ici!
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
