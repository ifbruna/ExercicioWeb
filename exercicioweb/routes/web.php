<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [ImcController::class, 'form']);

Route::get('/form/mostrar', [ImcController::class, 'calcular']);