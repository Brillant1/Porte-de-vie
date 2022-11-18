<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('accueil', function () {
    return view('front.accueil');
})->name('accueil');
Route::get('agenda', function () {
    return view('front.agenda');
})->name('agenda');
Route::get('biographie', function () {
    return view('front.biographie');
})->name('biographie');
Route::get('branche', function () {
    return view('front.branche');
})->name('branche');
Route::get('don', function () {
    return view('front.don');
})->name('don');
Route::get('contact', function () {
    return view('front.contact');
})->name('contact');
Route::get('equipe', function () {
    return view('front.equipe');
})->name('equipe');
Route::get('eglise', function () {
    return view('front.eglise');
})->name('eglise');
Route::get('partenaire', function () {
    return view('front.partenaire');
})->name('partenaire');
Route::get('service', function () {
    return view('front.service');
})->name('service');
Route::get('don', function () {
    return view('front.don');
})->name('don');
