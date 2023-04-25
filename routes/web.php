<?php

use App\Http\Controllers\EstoqueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque');

Route::get('/estoque/adicionar', [EstoqueController::class, 'adicionar'])->name('estoque/adicionar');

Route::post('/estoque/adicionar', [EstoqueController::class, 'adicionar']);