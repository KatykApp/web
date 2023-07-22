<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\VistaController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */

Route::get('/', jobController::class);  // Controla una unica vista

// Control de varias vistas 
/* Route::get('vistas/create', [VistasController::class, 'create']); */
/* Route::controller(VistaController::class)->group(function(){
    Route::get('/home', 'index');
    Route::get('/home/job-landing', 'jobLanding');
    Route::get('/home/auth-signin-basic', 'authSigninBasic');
}); */



Route::get('home', [VistaController::class, 'index']);
Route::get('home/job-landing', [VistaController::class, 'jobLanding']);
Route::get('home/auth-signin-basic', [VistaController::class, 'authSigninBasic']);