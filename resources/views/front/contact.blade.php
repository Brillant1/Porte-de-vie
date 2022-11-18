@extends('front.layouts.template')
@section('content')
<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Contactez nous</h1>
            </header>

            <p>
                Nous aimerions recevoir de vos nouvelles. Intéressé à travailler ensemble ? Remplissez le formulaire ci-dessous avec quelques informations sur votre projet et je vous répondrai dès que possible. Veuillez m'accorder quelques jours pour répondre.
            </p>
            <br>
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Nom">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Prénoms">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                    </div>
                        <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Téléphone">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea placeholder="Type your message here..." class="form-control" rows="9"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
                        </div>
                        <div class="col-sm-6 text-right">
                            <input class="btn btn-action" type="submit" value="Envoyez le  message">
                        </div>
                    </div>
                </form>

        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-3 sidebar sidebar-right">

            <div class="widget">
                <h4>Address</h4>
                <address>
                    Godomey PK 14 vons avant le cimetière en venant de Cotonou
                </address>
                <h4>Téléphone:</h4>
                <address>
                    +229 62529471 / 96927055
                </address>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>

@endsection
