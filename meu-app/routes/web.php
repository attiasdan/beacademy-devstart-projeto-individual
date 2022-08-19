<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController
};

// ROTAS DE USUÁRIO:
Route::get('/', function () {
    return redirect()->route('users.index');
});

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/users/{id}/delete', [UserController::class, 'delete'])->name('users.delete');