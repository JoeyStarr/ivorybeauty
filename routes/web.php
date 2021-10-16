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
    return view('pages/homepage');
})->name('home');

Route::get('/about', function () {
    return view('pages/apropos');
})->name('apropos');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/categorie', function () {
    return view('pages/categorie');
})->name('categorie');

Route::get('/produit', function () {
    return view('pages/produit');
})->name('produit');


Route::get('/confidentialite', function () {
    return view('pages/politique/confidentialite');
})->name('confident');

Route::get('/remboursement', function () {
    return view('pages/politique/remboursement');
})->name('rembourser');

Route::get('/validation', function () {
    return view('pages/validation');
});
