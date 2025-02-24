<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'home'])->name('home');
Route::get('/games/{slug}', [GameController::class, 'show'])->name('games.show');
Route::get('/create', [GameController::class, 'create'])->name('games.create');
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::get('/games/{slug}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/{slug}', [GameController::class, 'update'])->name('games.update');
Route::delete('/games/{slug}', [GameController::class, 'destroy'])->name('games.destroy');
