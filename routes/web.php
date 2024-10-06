<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route for the contact page
Route::get('/contactus', function () {
    return view('contactus');
})->name('contact');

// Route for the about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route to handle age checking with middleware
Route::post('/check-age', function (Request $request) {
    return view('welcome'); // Redirect back to the welcome page
})->middleware('checkAge')->name('check-age');

// Route for the restricted dashboard (age over 21)
Route::get('/restricted-dashboard', function () {
    return "RESTRICTED!! Over age kana!"; // Message for users aged 21 or older
})->name('restricted-dashboard');

// Route for Access Denied page (age under 18)
Route::get('/access-denied', function () {
    return "Access Denied PATAL MINOR KA!"; // Message for users under 18
})->name('access-denied');
