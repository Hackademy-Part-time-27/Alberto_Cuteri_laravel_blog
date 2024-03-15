<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) 
->name ('welcome');

Route::get('/articoli', function () {
    
    $articoli = [
        ['titolo' => 'Camminare il mondo', 'categoria' => 'Cammino', 'descrizione' => '100 giorni di cammino in Europa'],
        ['titolo' => 'Viaggiare in autostop', 'categoria' => 'Autostop', 'descrizione' => 'Guida pratica'],
        ['titolo' => 'Mete calde invernali', 'categoria' => 'Esplorazione', 'descrizione' => 'viaggio alle Maldive'],
    ];
    
//$articoli = [];

    return view('pages.articoli', ['articoli' => $articoli]);
}) 
->name ('articoli');

Route::get('/contatti', function () {
    
    return view('pages.contatti');
}) 
->name ('contatti');

Route::get('/chisono', function () {
    
    // $list = ['nome','cognome','età'];
    /* il file della vista si trova nella sottocartella */
    return view ('pages.chisono', [
        'title' => 'Ciao',
        'description' => 'mi chiamo Alberto <br> sono nato a Catania <br> ho 35 anni', 
        // 'list' => $list,
    ]);
}) 
->name('chisono');

Route::get('/articolo/{articolo}', function($articolo) {

    $index = $articolo;

    $articoli = [
        ['titolo' => 'Camminare il mondo', 'categoria' => 'Cammino', 'descrizione' => '100 giorni di cammino in Europa'],
        ['titolo' => 'Viaggiare in autostop', 'categoria' => 'Autostop', 'descrizione' => 'Guida pratica'],
        ['titolo' => 'Mete calde invernali', 'categoria' => 'Esplorazione', 'descrizione' => 'viaggio alle Maldive'],
    ];

    return view ('pages.articolo', ['articolo' => $articoli[$index]]);

    })
    ->name('articolo');