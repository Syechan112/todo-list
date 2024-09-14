<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('index');
});

// Menampilkan daftar todo
Route::get('/', [TodoController::class, 'index'])->name('todos.index');

// Menyimpan todo baru
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

// Menghapus todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

