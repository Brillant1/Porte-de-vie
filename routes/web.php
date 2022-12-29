<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('actualites/liste', [ActualiteController::class, 'getActualites'])->name('actualites.liste');
Route::get('actualite/detail/{id}', [ActualiteController::class, 'detailActualite'])->name('detailActualite');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('actualites', ActualiteController::class);

    Route::get('partenaire', function () {
        return view('front.partenaire');
    })->name('partenaire');
    Route::get('rendez/prophetique', function () {
        return view('front.rendez-vous-prophetique');
    })->name('rendez-vous-prophetique');
});
Route::get('simple/appointments', [AppointmentController::class, 'rendez_vous'])->name('simpleAppointments');

Route::resource('messages', ContactController::class);
Route::resource('appointments', AppointmentController::class);


Route::get('/', function () {
    return view('front.accueil');
})->name('accueil');

Route::get('don', function () {
    return view('front.don');
})->name('don');

Route::get('eglise', function () {
    return view('front.eglise');
})->name('eglise');

Route::get('equipe', function () {
    return view('front.equipe');
})->name('equipe');

Route::get('contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('login', function () {
    return view('front.login');
})->name('login');

Route::get('bracnhe', function () {
    return view('front.bracnhe');
})->name('bracnhe');

Route::get('bibliotheque', function () {
    return view('front.bibliotheque');
})->name('bibliotheque');



Route::get('branche', function () {
    return view('front.branche');
})->name('branche');



Route::get('mediatheque', function () {
    return view('front.mediatheque');
})->name('mediatheque');



Route::get('rendez/simple', function () {
    return view('front.rendez-vous-simple');
})->name('rendez-vous-simple');














Route::get('biographie', function () {
    return view('front.biographie');
})->name('biographie');




require __DIR__.'/auth.php';
