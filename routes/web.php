<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'home']);
Route::get('/kontak', [ProfileController::class, 'kontak']);
Route::get('/profil', [ProfileController::class, 'profil']);
