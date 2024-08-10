<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/contacts/create', function () {
    return view('create');
});
Route::get("/contacts",[ContactController::class,"index"]);
Route::post("/contacts/create",[ContactController::class,"create"]);
Route::get("/contacts/{id}",[ContactController::class,"show"]);
Route::get("/contacts/{id}/edit",[ContactController::class,"edit"]);
