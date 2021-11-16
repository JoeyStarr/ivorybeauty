<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailcontrol;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\ValidController;
use App\Http\Controllers\CommanderController;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\DashController;
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

Route::group(['prefix'=>'categorie'] , function(){
	Route::get('/3D_naturel',[HomeController::class,'categorie3dN'])->name('natur');
	Route::get('/7D_volimuneux',[HomeController::class,'categorie7dV'])->name('7dvolu');
	Route::get('/3D_bande_transparente',[HomeController::class,'categorie3dBT'])->name('bandet');
	Route::get('/Cils_en_soie',[HomeController::class,'categorieSOIE'])->name('soie');
});

Route::post('/forml/{id}',[HomeController::class,'formulaire'])->name('forml');

Route::get('/produit/{id}',[HomeController::class,'produits'])->name('produit');

Route::get('/confidentialite',[HomeController::class,'confident'])->name('confident');

Route::get('/remboursement',[HomeController::class,'rembourser'])->name('rembourser');

Route::get('/validation', [ValidController::class,'valider'])->name('validation');

Route::get('/session/get/{id}/{quantity}', [RedisController::class, 'setredis'])->name('setsession');

Route::post('/mailenv', [Mailcontrol::class, 'bar'])->name('mailenv');

Route::get('/session', [RedisController::class, 'getredis'])->name('session');


Route::post('/commander', [CommanderController::class, 'commander'])->name('commande');

Route::post('/validation/modify/{id}', [RedisController::class, 'modify'])->name('modifier');

Route::get('/dashboard', [DashController::class, 'dash'])->middleware(['admin'])->name('dashi');

Route::get('/authen', [DashController::class, 'connectU']);

Route::post('/connecticut', [DashController::class, 'connecticut'])->name('connecticut');
Route::get('/deconnecticut', [DashController::class, 'deconnecticut'])->name('deconnecticut');

Route::get('/suppression/{id}', [DashController::class, 'dlC'])->name('dlC');