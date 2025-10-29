<?php
file_put_contents('routes/api.php', '<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PartageController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Ces routes sont automatiquement préfixées par /api/
| Exemple : http://127.0.0.1:8000/api/notes
|
*/

// Route pour récupérer l\'utilisateur connecté (protégée par Sanctum)
Route::middleware(\'auth:sanctum\')->get(\'/user\', function (Request $request) {
    return $request->user();
});

// Routes CRUD principales
Route::apiResource(\'utilisateurs\', UtilisateurController::class);
Route::apiResource(\'categories\', CategorieController::class);
Route::apiResource(\'notes\', NoteController::class);
Route::apiResource(\'medias\', MediaController::class);
Route::apiResource(\'partages\', PartageController::class);
Route::apiResource(\'historiques\', HistoriqueController::class);

// Routes d\'authentification
Route::post(\'/register\', [LoginController::class, \'register\']);
Route::post(\'/login\', [LoginController::class, \'login\']);
Route::middleware(\'auth:sanctum\')->post(\'/logout\', [LoginController::class, \'logout\']);
');