<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DocteursController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialitesController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::resource('patients', PatientsController::class);
Route::get('supprimer-patient/{id}', [PatientsController::class, 'destroy']);

Route::resource('docteurs', DocteursController::class);
Route::get('supprimer-docteur/{id}', [DocteursController::class, 'destroy']);

Route::resource('services',ServicesController::class);
Route::get('supprimer-service/{id}', [ServicesController::class, 'destroy']);

Route::resource('specialites', SpecialitesController::class);
Route::get('supprimer-specialite/{id}', [SpecialitesController::class, 'destroy']);

Route::resource('authentification', AuthentificationController::class);


Route::resource('rendezvous', RendezvousController::class);
Route::get('supprimer-rendezvous/{id}', [RendezvousController::class, 'destroy']);

Route::resource('roles', RolesController::class);

Route::get('dashboard', [AuthentificationController::class, 'dashboard'])->name('dashboard');
Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contactpost', [ContactController::class, 'contactpost'])->name('contactpost');

Route::post('/login',[AuthentificationController::class, 'login'] )->name('login');
Route::get('/logout',[AuthentificationController::class, 'logout'] )->name('logout');
