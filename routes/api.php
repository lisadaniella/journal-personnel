<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UtilisateurController,
    CategorieController,
    NoteController,
    MediaController,
    PartageController,
    HistoriqueController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Ces routes sont automatiquement préfixées par /api/
| Exemple : http://127.0.0.1:8000/api/notes
|
*/

// Exemple par défaut pour récupérer un utilisateur connecté (à garder)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Nos routes CRUD principales
Route::apiResource('utilisateurs', UtilisateurController::class);
Route::apiResource('categories', CategorieController::class);
Route::apiResource('notes', NoteController::class);
Route::apiResource('medias', MediaController::class);
Route::apiResource('partages', PartageController::class);
Route::apiResource('historiques', HistoriqueController::class);

use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
