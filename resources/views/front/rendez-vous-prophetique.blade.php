@extends('front.layouts.template')
@section('content')

<header id="head" class="secondary"></header>


<!-- container -->
<div class="container">

<div class="row col-sm-12">
    <marquee>
            <mark><h1> Veillez notez que les rendez de  consultations prophétiques sont payants</h1> </mark>
    </marquee>
    <!-- Article main content -->
    <article class="col-sm-9 maincontent">
        <header class="page-header">
            <h1 class="page-title text-center " style="color: rgb(42,80,145); font-size: 3em;">Prendre un rendez vous Prophétique </h1>
        </header>

        <p class="text-center">
            Vous aimeriez voir le Prophète. Intéressez par les merveilles de Dieu? Alors remplissez le formulaire ci-dessous avec quelques informations sur vous même afin de prendre rendez vous de consultation.S'il ne s'agit pas chez vous une consultation prophétique, veuillez faire retour sur <a href="rend_v_simple.html">Rendez vous ordinaire </a>
        </p>
        <br>
            <form>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea placeholder="Ecrivez les raisons de rendz vous..." class="form-control" rows="9"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" placeholder="Nom">
                    </div>
                    <br>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" placeholder="Prénoms">
                    </div>

                    <div class="col-sm-6 ">
                        <input class="form-control" type="mailto" placeholder="Email">
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" placeholder="Téléphone">
                    </div>
                </div>
                <br>
                <div class="row ">
                    <div class="col-sm-6">
                        <input type="date" name="anniversaire" class=" col-sm-12">
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
                    </div>
                <div class="col-12">
                    <a href="#"> <div class="col-sm-6 text-right ">
                        <input class="btn btn-action" type="submit" value="Suivant">
                    </div></a>
                  </div>
                </div>
            </form>

    </article>
    <!-- /Article -->
</div>
</div>
@endsection
