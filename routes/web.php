<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//static views

Route::view('/', 'index')->name('index');
Route::view('/about-us', 'about')->name('about');
Route::view('/out-services', 'services')->name('services');
Route::view('/contact-us', 'contact')->name('contact');


//method to get a view with a controller
Route::get('/users', [UserController::class, 'index'])->name('index');




