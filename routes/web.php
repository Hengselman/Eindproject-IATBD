<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HuisdierController;
use App\Http\Controllers\UserController;
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
Route::get('/collectie', [\App\Http\Controllers\HuisdierController::class, 'index'])->name('collectie.index');;

Route::middleware('auth')->group(function () {
    Route::get('/collectie/create', [\App\Http\Controllers\HuisdierController::class, 'create']);
    Route::post('/collectie/create', '\App\Http\Controllers\HuisdierController@store')->name('collectie.store');

    Route::post('/collectie', '\App\Http\Controllers\AanmeldController@store')->name('aanmeldingen.store');

    Route::get('/collectie/{id}', [\App\Http\Controllers\HuisdierController::class, 'show']);
    Route::post('/collectie/{id}', '\App\Http\Controllers\ReviewController@store')->name('reviews.store');


    Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::post('/users/{id}', '\App\Http\Controllers\AanmeldController@refuse')->name('aanmeldingen.refuse');
    Route::patch('/users/{id}', '\App\Http\Controllers\AanmeldController@accept')->name('aanmeldingen.accept');

});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', '\App\Http\Controllers\UserController@destroy')->name('users.destroy');

    Route::delete('/collectie/{id}', '\App\Http\Controllers\HuisdierController@destroy')->name('collectie.destroy');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

