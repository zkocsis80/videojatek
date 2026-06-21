<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');

Route::resource('categories', CategoryController::class);

Route::resource('tags', TagController::class);