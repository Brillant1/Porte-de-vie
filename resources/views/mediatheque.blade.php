@extends('layouts.template')
@section('content')
<style>
    .main-banner{
        height: 500px;
        background-image: url('{{ asset('img/renov-daze1.avif') }}');
        background-repeat: no-repeat;
        background-size: 100%;
    }
    .main-banner>h1{
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
        <div class="offset-5 ">
            <a href="#" class="text-white">PHOTOTEQUE</a>
            <a href="#" class="offset-1 text-white">VIDEOTEQUE</a>
        </div>
    </div>
    
    <h1 class="position-absolute text-white">Médiatèque</h1>     
</div>

<div class="container mt-5 pt-5">
    <h2 class="text-center offset-1">PHOTOTHEQUE</h2>
    <div class=" row offset-1">
        <div class=" col-6">
            <div style="font-size:20px;">
                <img src="{{ asset('img/renov-daze1.avif') }}" alt="" class="rounded current-activity-image1 w-100 ">
            </div>
        </div>
        <div class=" col-6 ">
            <div style="font-size:20px;">
                <img src="{{ asset('img/renov-daze1.avif') }}" alt="" class="rounded current-activity-image1 w-100"
                style="object-fit: cover;">
            </div>
        </div>
    </div>
    <br><br>
    <div class=" row offset-1">
        <div class=" col-6">
            <div style="font-size:20px;">
                <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image1 w-100 ">
            </div>
        </div>
        <div class=" col-6 ">
            <div style="font-size:20px;">
                <img src="{{ asset('img/renov-daze1.avif') }}" alt="" class="rounded current-activity-image1 w-100"
                style="object-fit: cover;">
            </div>
        </div>
    </div>
    <br><br>
    <div class=" row offset-1">
        <div class=" col-6 ">
            <div style="font-size:20px;">
                <img src="{{ asset('img/renov-daze1.avif') }}" alt="" class="rounded current-activity-image1 w-100 ">
            </div>
        </div>
        <div class=" col-6 ">
            <div style="font-size:20px;">
                <img src="{{ asset('img/renov-daze1.avif') }}" alt="" class="rounded current-activity-image1 w-100"
                style="object-fit: cover;">
            </div>
        </div>
    </div>
    <br><br>
    <div class=" row offset-1">
        <div class=" col-4 ">
            <div style="font-size:20px;">
                <img src="{{ asset('img/renov-daze1.avif') }}" alt="" class="rounded current-activity-image1 w-100 ">
            </div>
        </div>
        <div class=" col-4">
            <div style="font-size:20px;">
                <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image1 w-100"
                style="object-fit: cover;">
            </div>
        </div>
        <div class=" col-4">
            <div style="font-size:20px;">
                <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image1 w-100"
                style="object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<br><br><br><br>


<div class="container mt-5 pt-5">
    <h2 class="text-center offset-1">VIDEOTHEQUE</h2>
    <div class=" row offset-1">
        <div class=" col-6">
                <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                    <source src="">
                </video>
        </div>
        <div class=" col-6 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
    </div>
    <br><br>
    <div class=" row offset-1">
        <div class=" col-6">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
        <div class=" col-6 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
    </div>
    <br><br>
    <div class=" row offset-1">
        <div class=" col-6 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
        <div class=" col-6 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
    </div>
    <br><br>
    <div class=" row offset-1">
        <div class=" col-4 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
        <div class=" col-4 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
        <div class=" col-4 ">
            <video controls="controls" class="w-100 h-100" poster="{{ asset('img/renov-daze1.avif') }}">
                <source src="">
            </video>
        </div>
    </div>
</div>
@stop