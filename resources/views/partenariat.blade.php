@extends('layouts.template')
@section('content')
<style>
    .main-banner{
        height: 500px;
        background-image: url('{{ asset('img/img3.jpg') }}');
        background-repeat: no-repeat;
        background-size: 100%;
    }
    .main-banner>h3{
        bottom: 50px;
        left: 80px;
    }
    .current-activity-image{
        position: absolute;
        bottom: 20px;
        left: -20px;
    }
    .variable{
        bottom: 50px;
    }
    
</style>
<div class="main-banner position-relative w-100">
    <div style=" background-color: rgba(0, 0, 0, 0.6); height: 500px;">
       
    </div>
    
    <h3 class="position-absolute text-white">Partenariat</h3>     
</div>
<div class="bg-white">
    <div class="h2 text-center">Demander un partenariat</div>
    <div class="col-6 offset-3">
        <p class="text-muted"> Dieu s'est choisit une race pour ramener à la maison les enfants perdus du Royaume. Le partenariat est une alliance avec
            Dieu pour la diffusion de la parole de Dieu. Deviens partenaire aujourd'hui!
        </p>
    </div>
    
    <br><br>
    <p class="offset-4">Veuillez-vous connecter pour effectuer votre demander . <a href="" class="h3 text-primary" >Se connecter</a></p>
    <br>
    <p class="offset-5">Vous ne possedez pas un compte? . <a href="" class="h3 text-primary" >Inscrivez-vous</a></p>
    <br><br><br>
</div>

@stop