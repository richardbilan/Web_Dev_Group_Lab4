<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/welcome', function (Request $request) {
    $age = $request->query('age');

    // condition kang sa age limit
    if ($age < 18) {
        return redirect('/access-denied');
    } elseif ($age == 18) { 
        return view('welcome'); 
    } elseif ($age >= 21) {
        return redirect('/restricted-dashboard'); 
    }

    
    return view('welcome'); 
})->name('welcome'); //ini kapag 18 redirect sya sa mismong welcome page ta

Route::get('/restricted-dashboard', function () {
    return "I MISS YOU"; //digdi su messge na maluwas sa 21
});
Route::get('/access-denied', function () {
    return "Access Denied PATAL MINOR KA!"; //ini man sa less than 18
});