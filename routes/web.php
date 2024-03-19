<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) 
->name ('welcome');

Route::get('/articoli', [App\Http\Controllers\PagesController::class, 'articles'] ) 
->name ('articoli');

Route::get('/articolo/{articolo}',[App\Http\Controllers\PagesController::class, 'article'])
    ->name('articolo');

Route::get('/contatti', [App\Http\Controllers\PagesController::class, 'contacts']) 
->name ('contatti');

Route::get('/chisono', [App\Http\Controllers\PagesController::class, 'about'])
->name('chisono');
