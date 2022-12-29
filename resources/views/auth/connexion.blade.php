@extends('front.layouts.template')
@section('content')
<header id="head" class="secondary"></header>

<div class="container">

    <div class="row">
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">S'identifier</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Connectez-vous à votre compte</h3>
                        <p class="text-center text-muted">Vous n'avez pas encore un commpte ? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
                        <hr>

                        <form {{ route('login') }} method="POST">
                            @csrf
                            <div class="top-margin">
                                <label>Nom d'utilisateur/Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                            </div>
                            <div class="top-margin">
                                <label>Mots de passe  <span class="text-danger">*</span></label>
                                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <b><a href="{{ route('password.request') }}">Mots de passe oublié?</a></b>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action"  type="submit" style="background: #FF8C00 ">Se connecter</button>
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
