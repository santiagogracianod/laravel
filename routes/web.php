<?php

use Illuminate\Support\Facades\Route;

//metedo estatico para pintar una vista sin necesidad de un controlador
//solo aplica siempre que sea una vista estatica
Route::view('/', 'index')->name('index');
Route::view('/about-us', 'about')->name('about');
Route::view('/out-services', 'services')->name('services');
Route::view('/contact-us', 'contact')->name('contact');




