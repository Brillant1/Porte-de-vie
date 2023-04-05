@extends('layouts.template')
@section('content')
    <style>
        .main-banner {
            height: 500px;
            background-image: url('{{ asset('img/renov-daze1.avif')}}');
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .main-banner>h1 {
            bottom: 50px;
            left: 80px;
        }

        .current-activity-image {
            position: absolute;
            bottom: 20px;
            left: -20px;
        }

        .variable {
            bottom: 50px;
        }
    </style>
    <div class="main-banner position-relative w-100">
        <div style=" background-color: rgba(0, 0, 0, 0.6); height: 500px;">
            <div class="offset-5 ">

            </div>
        </div>

        <h1 class="position-absolute text-white">nos locaux</h1>
    </div>

    <br><br><br><br>
    <div class="container">
        <h2 class="text-center"><strong> Nous contacter</strong></h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card mt-4 maintenance-box">
                    <div class="card-body">
                        <i class="bx bx-map mb-4 h1 text-primary offset-5"></i>
                        <h5 class="font-size-15 text-uppercase text-center"> <strong> Localisation</strong></h5>
                        <br>
                        <p class="text-muted mb-0">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-4 maintenance-box">
                    <div class="card-body">
                        <i class="bx bx-phone-call mb-4 h1 text-primary offset-5"></i>
                        <h5 class="font-size-15 text-uppercase text-center">
                            <strong> Tél </strong>
                        </h5>
                        <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not
                            simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mt-4 maintenance-box">
                    <div class="card-body">
                        <i class="bx bx-voicemail mb-4 h1 text-primary offset-5"></i>
                        <h5 class="font-size-15 text-uppercase text-center">
                            <strong> Fixe</strong>
                        </h5>
                        <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not
                            simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-4 maintenance-box">
                    <div class="card-body">
                        <i class="bx bx-mail-send mb-4 h1 text-primary offset-5"></i>
                        <h5 class="font-size-15 text-uppercase text-center">
                            <strong> Adresse Mail</strong>
                        </h5>
                        <p class="text-muted mb-0">If you are going to use a passage of Lorem
                            Ipsum, you need to be sure there isn't anything embar.. <a href="mailto:no-reply@domain.com"
                                class="text-decoration-underline">no-reply@domain.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white offset-2 col-9">
        <br><br>
        <h2 class="text-center"><strong>Nous laisser un message</strong></h2>
        <br><br>
        <div class="container offset-3 ">
            <form action="">
                @csrf
                
                    <div class="col-lg-6">
                        <div class="mb-3">  
                            <input type="text" class="form-control" id="basicpill-firstname-input" placeholder="nom">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">    
                            <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="prenom">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">    
                            <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Mail ou téléphone">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">    
                            <textarea class="form-control" name="" id="" cols="113" rows="5">votre message</textarea>
                        </div>
                    </div>
                    <button type="submit" class="col-lg-6 bg-black text-white rounded p-2">Envoyer</button>               
            </form>
            <br><br>
        </div>
       
    </div>


@stop