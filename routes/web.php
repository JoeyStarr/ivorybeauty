<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailcontrol;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ValidController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/about',[HomeController::class,'about'])->name('apropos');

Route::get('/contact',[HomeController::class,'contacte'])->name('contact');

Route::get('/categorie/{id}',[HomeController::class,'categories']);

Route::post('/forml/{id}',[HomeController::class,'formulaire'])->name('forml');

Route::get('/categorie/produit/{id}',[HomeController::class,'produits'])->name('produit');

Route::get('/confidentialite',[HomeController::class,'confident'])->name('confident');

Route::get('/remboursement',[HomeController::class,'rembourser'])->name('rembourser');

Route::get('/validation/{id}/{quantity}', [ValidController::class,'valider'])->name('validation');

Route::get('/session/get/{id}/{quantity}', [SessionController::class, 'setsession'])->name('setsession');

Route::get('/session/del/', [SessionController::class, 'delsession'])->name('delsession');

Route::post('/contact/mailenv', [Mailcontrol::class, 'bar'])->name('mailenv');

Route::get('/session', [SessionController::class, 'getsession'])->name('session');