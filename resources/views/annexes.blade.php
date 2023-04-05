@extends('layouts.template')
@section('content')

<style>
    .main-banner {
        height: 500px;
        background-image: url('{{ asset('img/renov-daze1.avif') }}');
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .main-banner>h3 {
        bottom: 50px;
        left: 80px;
    }

    .current-activity-image {
        position: absolute;
        bottom: 20px;
        left: -20px;
    }
    .current-activity-image1 {
        position: absolute;
        bottom: 20px;
        left: 15px;
    }

    .variable {
        bottom: 50px;
    }
</style>
<div class="main-banner position-relative w-100">
    <div style=" background-color: rgba(0, 0, 0, 0.6); height: 500px;">

    </div>

    <h3 class="position-absolute text-white">Annexes</h3>
</div><br><br>
<div class="bg-white">
    <div class="col-6 offset-3">
        <p class="text-muted"> Dieu s'est choisit une race pour ramener à la maison les enfants perdus du Royaume.
        </p>
        <pre class="text-muted offset-1">Le partenariat est une alliance avec Dieu pour la diffusion de la
                     parole de Dieu.
        </pre>
    </div>
    <br><br>

    <div class="container">
        <h2>Annexe Calavi</h2>
        <div class="container mt-5 pt-5">
            <div class=" row justify-content-between">
                <div class=" col-5 border border-2 border-dark rounded position-relative" style="height:350px">
                    <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image w-100"
                        style="object-fit: cover;">
                </div>
                <div class="ps-5 col-7 bg-white">
                    <div style="font-size:20px;">
                        Ce recueil de travaux pratiques a été expressément conçu et réalisé pour assimiler, par la
                        pratique,
                        les notions théoriques de couverture du bâtiment.

                        Placé en situation de chantier, chacun pourra librement préparer - en maquette - les ouvrages
                        d'atelier.

                        Contenant tout ce qu'il faut pour s'exercer, ce matériel d'apprentissage est utilisable aussi
                        bien
                        en cours et en formation que chez soi, ainsi que dans tous les cas de figure où l'on se trouve
                        éloigné de l'enseignant, du formateur ou du chantier.

                        Imprimées en couleurs sur une carte semi-rigide, les planches de quatre maquettes complètes de
                        toitures types en ardoise, en tuiles et en zinc sont accompagnées de toutes les consignes
                        professionnelles de construction pour réaliser, comme sur le chantier et par soi-même, des
                        maquettes
                        évolutives dont les divers éléments seront découpés et collés.
                        <br>
                        <h3>localisation:</h3>
                        Calavi arcon-Ville En face du supermarché du point
                        <br>
                        <button type="#">Voir agenda</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <br><br>
        <h2>Annexe de cotonou</h2>
        <div class="container mt-5 pt-5">
            <div class=" row justify-content-between">
                <div class="ps-5 col-7 bg-white">
                    <div style="font-size:20px;">
                        Ce recueil de travaux pratiques a été expressément conçu et réalisé pour assimiler, par la
                        pratique,
                        les notions théoriques de couverture du bâtiment.

                        Placé en situation de chantier, chacun pourra librement préparer - en maquette - les ouvrages
                        d'atelier.

                        Contenant tout ce qu'il faut pour s'exercer, ce matériel d'apprentissage est utilisable aussi
                        bien
                        en cours et en formation que chez soi, ainsi que dans tous les cas de figure où l'on se trouve
                        éloigné de l'enseignant, du formateur ou du chantier.

                        Imprimées en couleurs sur une carte semi-rigide, les planches de quatre maquettes complètes de
                        toitures types en ardoise, en tuiles et en zinc sont accompagnées de toutes les consignes
                        professionnelles de construction pour réaliser, comme sur le chantier et par soi-même, des
                        maquettes
                        évolutives dont les divers éléments seront découpés et collés.
                        <br>
                        <h3>localisation:</h3>
                        Calavi arcon-Ville En face du supermarché du point
                        <br>
                        <button type="#">Voir agenda</button>
                    </div>
                    

                </div>
                <div class="  col-5 border border-2 border-dark rounded position-relative" style="height:350px">
                    <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image1 w-100"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
<br><br>
        <h2>Annexe de parakou</h2>
        <div class="container mt-5 pt-5">
            <div class=" row justify-content-between">
                <div class=" col-5 border border-2 border-dark rounded position-relative" style="height:350px">
                    <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image w-100"
                        style="object-fit: cover;">
                </div>
                <div class="ps-5 col-7 bg-white">
                    <div style="font-size:20px;">
                        Ce recueil de travaux pratiques a été expressément conçu et réalisé pour assimiler, par la
                        pratique,
                        les notions théoriques de couverture du bâtiment.

                        Placé en situation de chantier, chacun pourra librement préparer - en maquette - les ouvrages
                        d'atelier.

                        Contenant tout ce qu'il faut pour s'exercer, ce matériel d'apprentissage est utilisable aussi
                        bien
                        en cours et en formation que chez soi, ainsi que dans tous les cas de figure où l'on se trouve
                        éloigné de l'enseignant, du formateur ou du chantier.

                        Imprimées en couleurs sur une carte semi-rigide, les planches de quatre maquettes complètes de
                        toitures types en ardoise, en tuiles et en zinc sont accompagnées de toutes les consignes
                        professionnelles de construction pour réaliser, comme sur le chantier et par soi-même, des
                        maquettes
                        évolutives dont les divers éléments seront découpés et collés.
                        <br>
                        <h3>localisation:</h3>
                        Calavi arcon-Ville En face du supermarché du point
                        <br>
                        <button type="#">Voir agenda</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>




@stop