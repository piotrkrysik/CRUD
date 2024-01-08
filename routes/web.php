<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/People', [PeopleController::class, 'index'])->name('People.index');
Route::get('/People/create', [PeopleController::class, 'create'])->name('People.create');
Route::post('/People', [PeopleController::class, 'store'])->name('People.store');
Route::get('/People/{people}/edit', [PeopleController::class, 'edit'])->name('People.edit');
Route::get('/People/{people}/update', [PeopleController::class, 'update'])->name('People.update');
Route::delete('/People/{people}/delete', [PeopleController::class, 'delete'])->name('People.delete');
Route::get('/People/{people}', [PeopleController::class, 'show'])->name('People.show');