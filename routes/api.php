<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/messages', [MessageController::class, 'store']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/messages', [MessageController::class, 'index']); 
Route::post('/upload', [MessageController::class, 'uploadFile']);
Route::get('/batchMessages', [MessageController::class, 'batchMessages']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
