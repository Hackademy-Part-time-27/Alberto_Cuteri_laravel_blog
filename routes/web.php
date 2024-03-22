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

    Route::get('/contatti',[App\Http\Controllers\PagesController::class, 'contacts'])
    ->name('contatti');

// Route::get('/contatti', [App\Http\Controllers\ContactsController::class, 'send','contacts']) 
// ->name ('contacts.send');
// Route::post('/contatti/send', [App\Http\Controllers\ContactsController::class, 'send','contacts']) 
// ->name ('contacts.send');

Route::get('/chisono', [App\Http\Controllers\PagesController::class, 'about'])
->name('chisono');

// Route::get('/test',[App\Http\Controllers\TestController::class, 'test'])
// ->name('test'); 
