<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;

// Welcome route (default home page)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Contact Us route
Route::get('/contactus', function () {
    return view('contactus');
})->name('contact');

// About Us route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Middleware-protected route (Dashboard)
Route::middleware(['checkAge'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/access-denied', function () {
    return "Access Denied"; // You can create a view for a more user-friendly message
});

// Example route to test
Route::post('/test-age', function (Request $request) {
    return redirect('/welcome?age=' . $request->input('age'));
});

Route::middleware(['checkAge:21'])->group(function () {
    Route::get('/restricted-dashboard', function () {
        return view('restricted_dashboard');
    });
});