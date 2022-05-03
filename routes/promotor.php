<?php

use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('promotor.home');
