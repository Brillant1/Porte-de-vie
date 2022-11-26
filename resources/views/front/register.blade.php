@extends('front.layouts.template')
@section('content')
<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Inscription</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Enregistrer un nouveau compte</h3>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="{{ route('login') }}">Connexion</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                        <hr>

                        <form>
                            <div class="top-margin">
                                <label>Prénom</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Nom</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label> Addresse Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="row top-margin">
                                <div class="col-sm-6">
                                    <label>Mots de passe <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Confirmé mots de passe  <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        j'ai lu les<a href="page_terms.html">Termes et conditions</a>
                                    </label>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->
@endsection
