<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;

Route::get('/', function () {
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

Route::post('/test-age', function (Request $request) {
    return redirect('/welcome?age=' . $request->input('age'));
});

// Optional: Middleware with parameter example (21)
Route::middleware(['checkAge:21'])->group(function () {
    Route::get('/restricted-dashboard', function () {
        return view('restricted_dashboard');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard'); // This should redirect to the welcome page with age parameter
});
Route::get('/dashboard', function (Request $request) {
    return redirect('/welcome?age=' . $request->query('age')); // Redirect to welcome with age
});
