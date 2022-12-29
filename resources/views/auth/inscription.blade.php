@extends('front.layouts.template')
@section('content')
<header id="head" class="secondary"></header>

<div class="container">

    <div class="row">


        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Inscription</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Enregistrer un nouveau compte</h3>
                        <p class="text-center text-muted">Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a> </p>
                        <hr>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="top-margin">
                                <label>Nom et Prénoms</label> <span class="text-danger">*</span></label>
                                <input class=" form-control" type="text" name="name" :value="old('name')" required autofocus>
                            </div>

                            <div class="top-margin">
                                <label> Adresse Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" type="email" name="email" :value="old('email')" required>
                            </div>

                            <div class=" top-margin">
                                <label>Mot de passe <span class="text-danger">*</span></label>
                                <input class="form-control"  id="password"                                 type="password"
                                name="password"
                                required autocomplete="new-password">
                            </div>

                            <div class="top-margin">
                                <label>Confirmé le mot de passe  <span class="text-danger">*</span></label>
                                <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required >
                            </div>


                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <label class="checkbox">
                                        <input type="checkbox" required>
                                        J'ai lu les <a href="page_terms.html">Termes et conditions</a>
                                    </label>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit" style="background: #FF8C00; ">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </article>


    </div>
</div>
@endsection
