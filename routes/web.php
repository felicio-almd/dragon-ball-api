<?php

use App\Http\Controllers\PersonagemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/lista-personagens', [PersonagemController::class, 'index'])->name('personagens.index');
// Route::post('/salvar-personagem', [PersonagemController::class, 'store'])->name('personagem.store');
// Route::get('/criar-personagem', [PersonagemController::class, 'create'])->name('personagem.create');
// Route::get('/mostrar-personagem/{id}', [PersonagemController::class, 'show'])->name('personagem.show');
// Route::put('/update-personagem/{id}', [PersonagemController::class, 'update'])->name('personagem.update');
// Route::get('/editar-personagem/{id}', [PersonagemController::class, 'edit'])->name('personagem.edit');
// Route::delete('/deletar-personagem/{id}', [PersonagemController::class, 'destroy'])->name('personagem.delete');
