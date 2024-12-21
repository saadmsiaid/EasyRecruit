<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UtilisateursController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('utilisateurs', [UtilisateursController::class, 'index']); 
Route::post('utilisateurs', [UtilisateursController::class, 'store']); 
Route::get('utilisateurs/{id}', [UtilisateursController::class, 'show']); 
Route::put('utilisateurs/{id}', [UtilisateursController::class, 'update']); 
Route::delete('utilisateurs/{id}', [UtilisateursController::class, 'destroy']); 
