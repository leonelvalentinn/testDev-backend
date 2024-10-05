<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subject/{id}', [SubjectController::class, 'show']);
Route::post('/create-subject', [SubjectController::class, 'store']);
Route::put('/update-subject/{id}', [SubjectController::class, 'update']);
Route::delete('/delete-subject/{id}', [SubjectController::class, 'destroy']);

Route::post('/create-user', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);
