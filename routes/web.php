<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// website routing

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/crewing-services', function () {
    return view('crewing-services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/hotel', function () {
    return view('hotel');
});
Route::get('/marine', function () {
    return view('marine');
});






// dashboard and Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
