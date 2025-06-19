<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index']);

Route::get('/greeting',[GreetingController::class,'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/nico', function () {
    return '<h2>dapat test test lalabas kay production to verify na late sya ng isang pull</h2>';
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
