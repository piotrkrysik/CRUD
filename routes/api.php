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

Route::get('Krysik/310657/People/', [PeopleController::class, 'read']);
Route::post('Krysik/310657/People/create', [PeopleController::class, 'create']);
Route::put('Krysik/310657/People/update/{id}', [PeopleController::class, 'update']);
Route::delete('Krysik/310657/People/delete/{id}', [PeopleController::class, 'delete']);
Route::get('Krysik/310657/People/{id}', [PeopleController::class, 'show']);




