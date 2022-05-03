<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\DepartamentoController;
use App\Http\Controllers\Admin\ProvinciaController;
use App\Http\Controllers\Admin\DistritoController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::middleware(['auth:sanctum', 'verified', 'verifyrole'])->resource('eventos', EventoController::class)->names('admin.eventos');
Route::middleware(['auth:sanctum', 'verified', 'verifyrole'])->resource('sliders', SliderController::class)->names('admin.sliders');
Route::middleware(['auth:sanctum', 'verified', 'verifyrole'])->resource('categorias', CategoriaController::class)->names('admin.categorias');
Route::middleware(['auth:sanctum', 'verified', 'verifyrole'])->resource('departamentos', DepartamentoController::class)->names('admin.departamentos');
Route::middleware(['auth:sanctum', 'verified', 'verifyrole'])->resource('provincias', ProvinciaController::class)->names('admin.provincias');
Route::middleware(['auth:sanctum', 'verified', 'verifyrole'])->resource('distritos', DistritoController::class)->names('admin.distritos');


