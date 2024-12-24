<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UtilisateursController;
use App\Http\Controllers\Api\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('utilisateurs', [UtilisateursController::class, 'index']); 
Route::post('utilisateurs', [UtilisateursController::class, 'store']); 
Route::get('utilisateurs/{id}', [UtilisateursController::class, 'show']); 
Route::put('utilisateurs/{id}', [UtilisateursController::class, 'update']); 
Route::delete('utilisateurs/{id}', [UtilisateursController::class, 'destroy']); 

Route::post('register', [AuthController::class, 'register']);


Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('user', [AuthController::class, 'getUser']);
Route::middleware('auth:api')->get('profile', function (Request $request) {
    return response()->json($request->user());
});
Route::middleware('auth:api')->get('/dashboard', [AuthController::class, 'dashboard']);
