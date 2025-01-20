<?php

use Illuminate\Support\Facades\Route;

//metedo estatico para pintar una vista sin necesidad de un controlador
//solo aplica siempre que sea una vista estatica
Route::view('/', 'landing.about')->name('welcome');





