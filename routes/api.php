<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/People/read', [PeopleController::class, 'read']);
Route::post('/People/create/', [PeopleController::class, 'create']);
Route::put('/People/update/{id}', [PeopleController::class, 'update']);
Route::delete('/People/delete/{id}', [PeopleController::class, 'delete']);
Route::get('/People/get/{id}', [PeopleController::class, 'show']);