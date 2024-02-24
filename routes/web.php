<?php

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

Route::get('/', function () {

    $comics = config('comics');

    /*
        compact: crea un array associativo le cui chiavi sono le stringhe
                 che mettiamo tra le parentesi, mentre i valori di tali
                 chiavi sono i valori delle variabili con i nomi corrispondenti
                 alle stringhe inserite

        compact('firstName', 'lastName')
         |                                     |
         V                                     V

         [
            'firstName' => $firstName,
            'lastName' => $lastName,
         ]
    */

    /*
        dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
            e poi stoppa l'esecuzione
    */
    // dd(compact('firstName', 'lastName'));

    return view('subpages.characters', [
        'comics' => $comics
    ]);
    // return view('welcome', compact('firstName', 'lastName'));
});

Route::get('/comics', function () {
    $comics = config('comics');

    return view('subpages.comics', [
        'comics' => $comics
    ]);
});

Route::get('/collectibles', function () {
    $comics = config('comics');

    return view('subpages.collectibles', [
        'comics' => $comics
    ]);
});

Route::get('/fans', function () {
    $comics = config('comics');

    return view('subpages.fans', [
        'comics' => $comics
    ]);
});

Route::get('/games', function () {
    $comics = config('comics');

    return view('subpages.games', [
        'comics' => $comics
    ]);
});

Route::get('/movies', function () {
    $comics = config('comics');

    return view('subpages.movies', [
        'comics' => $comics
    ]);
});

Route::get('/news', function () {
    $comics = config('comics');

    return view('subpages.news', [
        'comics' => $comics
    ]);
});

Route::get('/shop', function () {
    $comics = config('comics');

    return view('subpages.shop', [
        'comics' => $comics
    ]);
});

Route::get('/tv', function () {
    $comics = config('comics');

    return view('subpages.tv', [
        'comics' => $comics
    ]);
});

Route::get('/videos', function () {
    $comics = config('comics');

    return view('subpages.videos', [
        'comics' => $comics
    ]);
});


// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
