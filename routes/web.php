<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/oeuvres', [OeuvreController::class, 'index'])->name('oeuvres.index');
    Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');

    Route::resource('categories', CategorieController::class);
    Route::resource('oeuvres', OeuvreController::class);

    Route::get('/oeuvres', [OeuvreController::class, 'index'])->name('oeuvres.index');

    Route::resource('categories', CategorieController::class);

    Route::resource('oeuvres', OeuvreController::class);

});

require __DIR__.'/auth.php';
