@extends('front.layouts.template')
@section('content')
<style>
    .eglise-grid {
        display:  flex;
        justify-content: space-between;
    }
    .eglise-grid>div{
        border: 1px solid green;
        padding: 3px;
        padding-left: 15px;
    }
</style>
<header id="head1" >
    <div class="row ">
        <h1 class="lead col-md-12">
            <b>PRESENTATION DE L'EGLISE "PORTE DE VIE"</b>
        </h1>
    </div>
</header>
{{-- <div class="container-fluid">
    <div class="container">
       <div class="eglise-grid">
            <div>
                <h4>Notre mission</h4>
                <div>
                    Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit.
                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id
                    imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.
                </div>
            </div>
            <div>
                <h4>Notre mission</h4>
                <div>
                    Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit.
                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id
                    imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.
                </div>
            </div>

            <div>

            </div>
       </div>
       <div>

       </div>
    </div>
</div> --}}
<div  class="container">
    <div class="col-md-4">
        <h2 class="lead col-md-12 text-center">	HISTORIQUE</h2>
        L’Association de Lutte pour la promotion des Initiatives de Développement, en abrégé ALIDé, est une institution de
        microfinance qui est née le 14 janvier 2006 suite à l’institutionnalisation du Programme Crédit Epargne de l’ONG
        française Initiative Développement (ID).

        En effet, en 1995, ID a lancé un programme intégré touchant deux quartiers populaires de Cotonou (Placodji et
        Akpakpadodomé). Ce programme possédait plusieurs volets dont notamment un volet microfinance. Le développement des
        différentes composantes de ce programme ainsi que la recherche d’une pérennité au niveau des actions ont abouti à la
        séparation entre le volet microfinance et les autres volets à vocation purement sociale. (Accompagnement Familial et
        Santé, Education, Prévention MST/SIDA). Le volet microfinance s’est par las suite transformé dès 1998 en un programme à
        part entière. Il a progressivement étendu sa zone d’intervention à de nombreux autres quartiers de Cotonou et travaille
        depuis à une plus grande professionnalisation de ses activités.

        ALIDé est membre du Consortium Alafia et de l’Africain Microfinance Transparency (AMT) Elle est officiellement reconnue
        par le Ministère de l’Economie et des Finances à travers l’agrément L.13.0043.A de l’arrêté 2013
        n°3050/MF/DC/CSSFD/CA/SRSSFDD du 18 Novembre 2013.
        <m-accordion>
            <details>
                <summary class="btn text-white" style="background-color: orange;">voir plus</summary>
                <p>
                    Cet agrément permet à l’institution d’effectuer des opérations
        d’octroi de crédit et de collecte d’épargne sur toute l’étendue du territoire national. A l’étape actuelle, elle couvre
        les quartiers populaires des départements du littoral, de l’atlantique, de l’ouémé, du plateau, du zou et des collines.Né le 22 Décembre 1982 à Cotonou (Bénin), le Prophète
         François Xavier Allokpe est un serviteur de Dieu avec un mandat prophétique. Il a reçu Christ dans les années 2000 dans l'Église Pentecôte au  Bénin où il a commencé par servir le seigneur
         cinq (05) ans plus tard en tant que responsable d'église locale. Marié à Ernestine DAYOU, Deux (02) enfants sont nés de leur union : (Hosana, Amen). En 2012,  il réçut l'appel au ministère,
         et se fit former pendant trois (03) ans à l'institut biblique Living Word Christ's Kingdom. En 2015, le Prophète François Xavier Allokpe fonda l'Église Évangélique PORTE DE VIE dont le siège est à Godomey
         dans la banlieue de Cotonou (Bénin). Il est aussi fondateur de l'institut biblique les Aigles de l'Éternel (IBAE) qui forme des jeunes disciples pour l'impact de la nouvelle génération. Écrivain, il  est également
         l'auteur de deux (02) ouvrages à savoir : "Le mystère caché des rêves" et "Tout pour vaincre la sorcellerie". Toujours avec la soif de la connaissance approfondie de la parole, il s'est inscrit à l'institut de Théologie LA SOURCE et obtint sa licence
                </p>
                <p>ALIDé est membre du Consortium Alafia et de l’Africain Microfinance Transparency (AMT) Elle est officiellement reconnue
                    par le Ministère de l’Economie et des Finances à travers l’agrément L.13.0043.A de l’arrêté 2013
                    n°3050/MF/DC/CSSFD/CA/SRSSFDD du 18 Novembre 2013. Cet agrément permet à l’institution d’effectuer des opérations
                    d’octroi de crédit et de collecte d’épargne sur toute l’étendue du territoire national. A l’étape actuelle, elle couvre
                    les quartiers populaires des départements du littoral, de l’atlantique, de l’ouémé, du plateau, du zou et des collines.Né le 22 Décembre 1982 à Cotonou (Bénin), le Prophète
                     François Xavier Allokpe est un serviteur de Dieu avec un mandat prophétique. Il a reçu Christ dans les années 2000 dans l'Église Pentecôte au  Bénin où il a commencé par servir le seigneur
                     cinq (05) ans plus tard en tant que responsable d'église locale. Marié à Ernestine DAYOU, Deux (02) enfants sont nés de leur union : (Hosana, Amen). En 2012,  il réçut l'appel au ministère,
                     et se fit former pendant trois (03) ans à l'institut biblique Living Word Christ's Kingdom. En 2015, le Prophète François Xavier Allokpe fonda l'Église Évangélique PORTE DE VIE dont le siège est à Godomey
                     dans la banlieue de Cotonou (Bénin). Il est aussi fondateur de l'institut biblique les Aigles de l'Éternel (IBAE) qui forme des jeunes disciples pour l'impact de la nouvelle génération. Écrivain, il  est également
                     l'auteur de deux (02) ouvrages à savoir : "Le mystère caché des rêves" et "Tout pour vaincre la sorcellerie". Toujours avec la soif de la connaissance approfondie de la parole, il s'est inscrit à l'institut de Théologie LA SOURCE et obtint sa licence</p>
            </details open>
        </m-accordion>

    </div>
<div class="col-md-4">
    <h2 class="lead col-md-12 text-center"> VISION</h2>
    Évangéliser le monde entier au travers des campagnes d'évangélisation, les mass médias (la télévision, les réseaux sociaux).
    Ériger des églises locales dans les contrées et nations.
   Former des disciples accomplis pour la relève et l'impact de la nouvelle génération.
   Créer des orphelinats pour l'assistance aux enfants délaissés.
   Créer un hôpital de référence
   Créer des centres agro-pastoraux, pisciculture etc...
    <h2 class="lead col-md-12 text-center"> MISSION</h2> <br>

    Mettre en œuvre des actions d'évangélisation pour le salut et la libération des âmes dans le monde entier
    Dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements puissants
    Permettre aux enfants de Dieu de toute la planète d'être libéré de servitude du diable
    Accorder une vie pleine de jouissance et de liberté en Jésus-Christ.

</div>
<div class="col-md-4">
    <h2 class="lead col-md-12 text-center"> VALEUR</h2>
    "Amour" : (1 Corinthiens 13:1-13)

"Puissance" :  1 Corinthiens, 4:20 - Car le royaume de Dieu ne consiste pas en paroles, mais en puissance.)

"Liberté" : (Jean, 8:36 - Si donc le Fils vous affranchit, vous serez réellement libres.)


    <h2 class="lead col-md-12 text-center"> COUVERTURE</h2>

    ALIDé est membre du Consortium Alafia et de l’Africain Microfinance Transparency (AMT) Elle est officiellement
    reconnue
    par le Ministère de l’Economie et des Finances à travers l’agrément L.13.0043.A de l’arrêté 2013
    n°3050/MF/DC/CSSFD/CA/SRSSFDD du 18 Novembre 2013. Cet agrément permet à l’institution d’effectuer des opérations
    d’octroi de crédit et de collecte d’épargne sur toute l’étendue du territoire national. A l’étape actuelle, elle
    couvre
    les quartiers populaires des départements du littoral, de l’atlantique, de l’ouémé, du plateau, du zou et des
    collines.
</div>
</div>
@endsection
