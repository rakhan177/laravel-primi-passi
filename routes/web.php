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
//
// // route è una classe laravel che richiamiamo con use sopra
// // chiama la root della home contenuta in view
// Route::get('/', function () {
//   // view punta direttamente alla cartella views senza bisogno di specificare la rotta
//     return view('welcome');
// });

Route::get('/', function () {
  // view punta direttamente alla cartella views senza bisogno di specificare la rotta
  // oltre alla view passo le variabili nome e cognome che richiamerò nella home
    return view('homePage', [
      "nome" => 'Matteo',
      "cognome" => 'Meago',
    ]);
});

// creo una rotta a caso e ritorno una stringa
Route::get('/pippo', function () {
    return "Benvenuto nella sezione pippo(che suona quasi male)";
});

Route::get('/sezione2', function () {
    return view('sezione2');
});

Route::get('/sezione3', function () {
    return view('sezione3');
})->name("section3");
