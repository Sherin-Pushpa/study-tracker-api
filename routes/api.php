<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudyTrackerApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('study-tracker', StudyTrackerApiController::class);

Route::put('/study-tracker/{id}', [StudyTrackerController::class, 'update']);

Route::delete('/study-tracker/{id}', [StudyTrackerController::class, 'destroy']);
