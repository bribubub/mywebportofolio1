<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ContactController; 


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});


Route::get('/contact', function () {
    return view('contact');
});


//Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');