<?php

use App\Http\Controllers\Api\OffreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OffresController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('offres', [OffreController::class, 'index']); 
Route::post('offres', [OffreController::class, 'store']); 
Route::get('offres/{id}', [OffreController::class, 'show']); 
Route::put('offres/{id}', [OffreController::class, 'update']); 
Route::delete('offres/{id}', [OffreController::class, 'destroy']); 
