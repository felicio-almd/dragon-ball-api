<?php

use App\Http\Controllers\PersonagemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/personagens', [PersonagemController::class, 'index']);
Route::post('/personagem', [PersonagemController::class, 'store']);
Route::get('/personagem/{id}', [PersonagemController::class, 'show']);
Route::put('/personagem/{id}', [PersonagemController::class, 'update']);
Route::delete('/personagem/{id}', [PersonagemController::class, 'destroy']);
