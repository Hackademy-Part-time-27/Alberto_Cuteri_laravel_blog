<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chisono', function () {
    
    $list = ['nome','cognome','età'];
    return view ('chisono', [
        'title' => 'Ciao',
        'subtitle' => 'mi chiamo Alberto sono nato a Catania ed ho 35 anni',
        'list' => $list,
    ]);
});