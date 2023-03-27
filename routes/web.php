<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#Front-end testing
Route::get('/', [\App\Http\Controllers\HuisdierController::class, 'index']);
Route::get('/collectie', [\App\Http\Controllers\HuisdierController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/collectie/{id}', [\App\Http\Controllers\HuisdierController::class, 'show']);
    
    Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'show']);
});


#Not logged in
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';

/*
#Admin-account logged in
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


#Logged in
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/collectie', [HuisdierController::class, 'index']);
    Route::get('/collectie/{id}', [HuisdierController::class, 'show']);

    Route::get('/gebruikers', [UserController::class, 'index']);
    Route::get('/gebruikers/{id}', [UserController::class, 'show']);
});

*/

