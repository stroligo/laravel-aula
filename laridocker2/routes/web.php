<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/games/{slug}', [AppController::class, 'show'])->name('games.show');
Route::get('/create', [AppController::class, 'create'])->name('games.create');
Route::post('/games', [AppController::class, 'store'])->name('games.store');
Route::get('/games/{slug}/edit', [AppController::class, 'edit'])->name('games.edit');
Route::put('/games/{slug}', [AppController::class, 'update'])->name('games.update');
Route::delete('/games/{slug}', [AppController::class, 'destroy'])->name('games.destroy');
