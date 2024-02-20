<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CursoController;

//Laravel lee de arriba hacia abajo

Route::get('/', homeController::class);

Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}', [CursoController::class, 'show']);

Route::get('cursos/{curso}/{cat?}', [CursoController::class, 'showCat']);
