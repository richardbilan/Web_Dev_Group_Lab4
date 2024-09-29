<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware(['checkAge'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/access-denied', function () {
    return "Access Denied";
});


Route::middleware(['checkAge:21'])->group(function () {
    Route::get('/restricted-dashboard', function () {
        return view('restricted_dashboard');
    });
});
