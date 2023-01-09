<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

//home page
Route::get('/', action: [PageController::class, 'index'])->name(name: 'home');

// about page
Route::get('/about', action: [PageController::class, 'about'])->name(name: 'about');
