<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/candidatures', [CandidatureController::class, 'index']);
Route::post('/candidatures', [CandidatureController::class, 'store']);
