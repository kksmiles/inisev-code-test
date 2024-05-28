<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserWebsiteSubscriptionController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::apiResource('/posts', PostController::class);
Route::apiResource('/websites', WebsiteController::class);

Route::put('/websites/{website}/subscribe', [UserWebsiteSubscriptionController::class, 'subscribe']);
Route::put('/websites/{website}/unsubscribe', [UserWebsiteSubscriptionController::class, 'unsubscribe']);
