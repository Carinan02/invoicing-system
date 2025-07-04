<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index']);

Route::get('/greeting',[GreetingController::class,'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/nico', function () {
    return '<h2>It worked!</h2>';
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

Route::resource('clients', ClientController::class)->middleware('auth');

Route::resource('rooms', RoomController::class)->middleware('auth');
