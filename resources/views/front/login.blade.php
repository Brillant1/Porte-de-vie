@extends('front.layouts.template')
@section('content')

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">S'identifier</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Connectez-vous à votre compte</h3>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="{{ route('register') }}">S'inscrire</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                        <hr>

                        <form>
                            <div class="top-margin">
                                <label>Nom d'utilisateur/Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Mots de passe  <span class="text-danger">*</span></label>
                                <input type="password" class="form-control">
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <b><a href="">Mots de passe oublié?</a></b>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">S'identifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </article>
        <!-- /Article -->

    </div>
</div>

@endsection
