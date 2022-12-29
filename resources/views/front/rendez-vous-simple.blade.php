@extends('front.layouts.template')
@section('content')

    <header id="head" class="secondary"></header>
    <div class="container">

        <div class="row col-sm-12">

            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title text-center " style="color: rgb(42,80,145); font-size: 3em;">Prendre un rendez vous ordinaire</h1>
                </header>

                <p class="text-center">
                    Vous aimeriez voir le Prophète. Intéressez par les merveilles de Dieu? Alors remplissez le formulaire ci-dessous avec quelques informations sur vous même afin de prendre rendez vous ordinaire.S'il  s'agit  chez vous une consultation prophétique, veuillez faire retour sur <a href="{{ route('rendez-vous-prophetique') }}">Rendez vous de consultation </a>
                </p>
                @if(session('success'))
                    <div class="alert alert-success show" role="alert">
                          {{ session('success') }}  Code du rendez-vous: <span class=" fw-bold">{{ session('code') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form method="POST" action="{{ route('appointments.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Nom" name="nom">
                        </div>

                        <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Prénoms" name="prenom">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-sm-6 ">
                            <input class="form-control" type="mailto" placeholder="Email" name="email">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Téléphone" name="telephone">
                        </div>
                    </div> <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="date" placeholder="Date du rendez-vous" name="appointment_date">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="time" placeholder="Téléphone" name="appointment_time">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea placeholder="Ecrivez les raisons de rendz vous..." class="form-control" rows="9" name="message" ></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="code">
                    <br>

                    <br>

                    <div class="col-12">
                        <a href="#"> <div class="col-sm-6 text-right ">
                            <input class="btn btn-primary" type="submit" style="background-color: " value="Envoyer">
                        </div></a>
                      </div>
                    </div>
                </form>

            </article>
            <!-- /Article -->
        </div>
    </div>
@endsection
