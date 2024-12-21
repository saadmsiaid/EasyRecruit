<?php

use App\Http\Controllers\Api\CandidatureController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('candidatures', [CandidatureController::class, 'index']); 
Route::post('candidatures', [CandidatureController::class, 'store']);
Route::get('candidatures/{id}', [CandidatureController::class, 'show']); 
Route::put('candidatures/{id}', [CandidatureController::class, 'update']); 
Route::delete('candidatures/{id}', [CandidatureController::class, 'destroy']); 
