
@extends('layouts.template')
@section('content')
<style>
    .main-banner{
        height: 500px;
        background-image: url({{ asset('img/renov-daze1.avif') }});
    }
    .main-banner>h1{
        bottom: 50px;
        left: 80px;
    }
    .p-particular{
        font-size: 1.1rem;
        line-height: 30px;
    }
    .current-activity-image{
        position: absolute;
        bottom: 20px;
        left: -20px;
    }
</style>
<div>
    <section class="banner">
        <div class="main-banner position-relative w-100">
            <div style=" background-color: rgba(0, 0, 0, 0.6); height: 500px;">

            </div>
            <h1 class="position-absolute text-white">Qui sommes-nous ?</h1>
        </div>
    </section>
    <section class="creation container-fluid">
        <div class="container py-5">
            <h1 class="text-center">Notre création</h1>
            <p class=" text-center p-particular" style=" line-height: 32px;font-size: 18px;">
                Lorem ipsum dolor sit amet consectetur. Adipiscing cum commodo quam proin praesent at semper enim aliquam. Ullamcorper luctus quam odio nunc dolor. Eget feugiat turpis turpis a. Vitae risus sem aliquam sollicitudin dolor mi senectus nulla. Elementum arcu egestas purus ut at arcu. In aliquam odio fringilla at feugiat nibh. Amet etiam morbi gravida sodales feugiat sed. Eu turpis leo convallis egestas tortor ullamcorper consectetur non quis. Pellentesque laoreet tincidunt elementum eu. Venenatis non eu pharetra donec sed id.
                Convallis massa lobortis at id nec libero. Sed platea lectus pretium mi sit molestie lobortis. Odio metus felis nunc id ornare tincidunt in tincidunt turpis. Massa in sem fermentum sed vitae accumsan. Consequat lorem vitae ullamcorper morbi mattis. Volutpat dolor accumsan pulvinar dolor fermentum odio. Egestas in quis faucibus vitae elit scelerisque et morbi porttitor.
            </p>
        </div>

    </section>
    <section class="mission">
        <div class="container-fluid">
            <div class="container py-5">
                <h1 class=" text-center pb-4">Notre mission</h1>

                <div class="row justify-content-between align-items-center">

                    <div class="col-6">
                        <p class="p-particular">
                        Mettre en œuvre des actions d'évangélisation pour le salut et la libération des
                         âmes dans le monde entier, dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements puissants, permettre aux enfants de Dieu de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance et de liberté en Jésus-Christ.
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/img-pdv2.jpeg') }}" class="w-100 rounded-3" alt="" height="300" style="object-fit: cover;">
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="vision">
        <div class="container py-5">
                <h1 class=" text-center pb-4">Notre vision</h1>

                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <img src="{{ asset('img/img-pdv2.jpeg') }}" class="w-100 rounded-3" alt="" height="300" style="object-fit: cover;">
                    </div>
                    <div class="col-6">
                        <p class="p-particular">
                            Évangéliser le monde entier au travers des campagnes d'évangélisation, les mass médias (la télévision, les réseaux sociaux). Ériger des églises locales dans les contrées et nations. Former des disciples
                            accomplis pour la relève et l'impact de la nouvelle génération. Créer des orphelinats pour l'assistance aux enfants délaissés. Créer un hôpital de référence. Créer des centres agro-pastoraux, pisciculture etc...
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <section class="prophete py-5">
        <h1 class="text-center">Le prophète fondateur de l'Eglise</h1>
        <div class="container mt-5 pt-5">
            <div class=" row justify-content-between">
                <div class=" col-4 d-flex justify-content-start">
                    <div class="border border-2 border-dark position-relative" style="width:90%; height: 100%; border-radius: 10px;">
                        <img src="{{ asset('img/membre/pasteur.png') }}" alt="" class="rounded current-activity-image w-100" height="505">
                    </div>
                </div>
                <div class="ps-5 col-8">
                    <h1 class="mb-4">
                        Lorem ipsum dolor sit amet consectetur. Neque pharetra.
                    </h1>
                    <p class="p-particular">
                        Né le 22 Décembre 1982 à Cotonou (Bénin), le Prophète François Xavier Allokpe est un serviteur de Dieu avec un mandat prophétique. Il a reçu Christ dans les années 2000 dans l'Église Pentecôte au  Bénin où il a commencé par servir le seigneur cinq (05) ans plus tard en tant que responsable d'église locale. Marié à Ernestine DAYOU, Deux (02) enfants sont nés de leur union : (Hosana, Amen). En 2012,  il réçut l'appel au ministère, et se fit former pendant trois (03) ans à l'institut biblique Living Word Christ's Kingdom. En 2015, le Prophète François Xavier Allokpe fonda l'Église Évangélique PORTE DE VIE dont le siège est à Godomey dans la banlieue de Cotonou (Bénin). Il est aussi fondateur de l'institut biblique les Aigles de l'Éternel (IBAE) qui forme des jeunes disciples pour l'impact de la nouvelle génération. Écrivain, il  est également l'auteur de deux (02) ouvrages à savoir : "Le mystère caché des rêves"
                        et "Tout pour vaincre la sorcellerie". Toujours avec la soif de la connaissance approfondie de la parole, il s'est inscrit à l'institut de Théologie LA SOURCE et obtint sa licence
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="dirigeant my-5">
        <div class="containerfluid">
            <h1 class="text-center pb-5">Nos dirigeants</h1>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/pr_artisan.png') }}" alt="">
                        <h4 class="mt-3">ALLOKPE Félix</h4>
                        <p>President du groupe Sentinelles </p>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/president_appui.png') }}" alt="">
                        <h4 class="mt-3">GBEDJ Adelphe</h4>
                        <p>Président du groupe d'appui aux personnes vulnérables  </p>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/president_deuteronome.png') }}" alt="">
                        <h4 class="mt-3">HOUNGBO Elise</h4>
                        <p>Présidente du groupe Deutéronome </p>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/pr_artisan.png') }}" alt="">
                        <h4 class="mt-3">BESSAN Amen</h4>
                        <p>Président du groupement des artisans </p>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/SG.png') }}" alt="">
                        <h4 class="mt-3">AMETODE Junior</h4>
                        <p>Sécrétaire Général </p>
                    </div>



                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/pr_enfant.png') }}" alt="">
                        <h4 class="mt-3">AHOUANDJINOU Mathieu</h4>
                        <p>Président du ministère des enfants </p>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/pr_interprete.png') }}" alt="">
                        <h4 class="mt-3">TCHASSOU Sandra</h4>
                        <p>Presidente du groupe des interprètes </p>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/membre/pr_musical.png') }}" alt="">
                        <h4 class="mt-3">NATO Ezehiel</h4>
                        <p>Président du groupe musical Ebenezer </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

@endsection
