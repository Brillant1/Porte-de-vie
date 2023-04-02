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
Route::resource('actualites', ActualiteController::class);

