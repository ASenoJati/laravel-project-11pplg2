<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/profil', [ProfileController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
