<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('accueil', function(){
    return view('welcome');
})->name('accueil');

Route::get('activites', function(){
    return view('allActivity');
})->name('activites');

Route::get('apropos', function(){
    return view('apropos');
});
Route::get('mediatheque', function(){
    return view('mediatheque');
});
Route::get('partenariat', function(){
    return view('partenariat');
});
Route::get('annexe', function(){
    return view('annexes');
});
Route::get('locaux', function(){
    return view('locaux');
});

Route::resource('actualites', ActualiteController::class);

