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
	Route::get('/Accessoires',[HomeController::class,'Accessoires'])->name('acc');
	Route::get('/Box',[HomeController::class,'Box'])->name('box');
	Route::get('/Cils-longs',[HomeController::class,'CilsLongs'])->name('long');
	Route::get('/Cils-moyens',[HomeController::class,'CilsMoyens'])->name('moyen');
	Route::get('/Cils-courts',[HomeController::class,'CilsCourts'])->name('court');
});

Route::post('/forml/{id}',[HomeController::class,'formulaire'])->name('forml');

Route::get('/produit/{name}',[HomeController::class,'produits'])->name('produit');

Route::get('/confidentialite',[HomeController::class,'confident'])->name('confident');

Route::get('/remboursement',[HomeController::class,'rembourser'])->name('rembourser');

Route::get('/validation', [ValidController::class,'valider'])->name('validation');

Route::get('/session/get/{id}/{quantity}', [RedisController::class, 'setredis'])->name('setsession');

Route::post('/mailenv', [Mailcontrol::class, 'bar'])->name('mailenv');

Route::get('/session', [RedisController::class, 'getredis'])->name('session');


Route::post('/commander', [CommanderController::class, 'commander'])->name('commande');

Route::post('/validation/modify/{id}', [RedisController::class, 'modify'])->name('modifier');

Route::get('/dashboard', [DashController::class, 'dash'])->middleware(['admin'])->name('vash');

Route::get('/xyz', [DashController::class, 'connectU']);

Route::post('/connecticut', [DashController::class, 'connecticut'])->name('connecticut');
Route::get('/deconnecticut', [DashController::class, 'deconnecticut'])->name('deconnecticut');

Route::delete('/suppression/{id}', [DashController::class, 'delete'])->name('dlc');
