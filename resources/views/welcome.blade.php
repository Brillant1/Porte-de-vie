@extends('layouts.template')
@section('content')
<section class="banner">

</section>
<section class="py-5">
    <div class="container-fluid d-flex justify-content-center">
        <div class="container d-flex">
            <div class="">
                <img src="{{ asset('img/img1.png') }}" alt="" style="width: 700px; object-fit: cover;">
            </div>
            <div class=" d-flex justify-content-center flex-column ps-5 pb-2" style=" line-height: 28px; ">
                <h1>L’église Evangélique “Porte de Vie”</h1>
                <p>L'institut biblique les aigles de l'Éternel vise à former les fidèles à une meilleure connaissance des écritures et faire d'eux des disciples accomplis et équipés. ...</p>
                <div class="mt-3 discover-more">
                    <a href="#" class="border border-2 border-dark rounded p-2 mt-2 text-decoration-none">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="donation py-3">
    <div class="container-fluid py-5">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <p class="fs-1">Donation</p>
            <p class="fs-2">Faites un don ou devenez notre partenaire</p>
            <div class="mt-3">
                <a href="" class=" text-white border border-2 border-white fw-bold p-2 px-3 rounded text-decoration-none">En savoir plus</a>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid contact mt-5">
    <div class="container">
        <h1 class=" text-center mb-4">Nous laisser un message</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur. Scelerisque iaculis ut blandit elit interdum augue morbi. At fringilla dignissim sed elit velit quam. Phasellus nisi a ornare nunc quis. Consectetur nunc.</p>
        <form action="" class="pt-3">

                <div class="row mt-3">
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3 mb-3">
                        <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                        <input type="text" id="nom" class=" border border-1 form-control px-3" name="nom" required>
                    </div>

                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3 mb-3">
                        <label for="email">Adresse mail<span class="text-danger fw-bold">*</span></label>
                        <input type="mail" id="email" class=" border border-1 form-control" name="email" required>
                    </div>

                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3 mb-3">
                        <label for="phone">Téléphone<span class="text-danger fw-bold">*</span></label>
                        <input type="phone" id="phone" class=" border border-1 form-control" name="phone" required>

                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-6 px-3 mb-3">
                        <label for="objet">Objet de votre message<span class="text-danger fw-bold">*</span></label>
                        <input type="text" id="objet" class=" border border-1 form-control" name="objet" required>
                    </div>
                    <div class="col-12">
                        <label for="message">Votre message<span class="text-danger fw-bold">*</span></label>
                        <textarea name="message" id="message" cols="30" rows="10" class="border border-1 form-control"
                            required></textarea>
                    </div>

                    <div class=" d-flex justify-content-center mt-3 ">
                        <input type="submit"  class=" text-white bg-dark rounded p-2 px-4" value="Enrégistrer">
                    </div>
                </div>


        </form>
    </div>
</section>
@endsection
