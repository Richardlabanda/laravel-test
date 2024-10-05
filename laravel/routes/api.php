<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("insertRecord", [App\Http\Controllers\InsertRecord::class, 'insert']);
Route::get("updateRecord", [App\Http\Controllers\UpdateRecord::class, 'update']);
Route::get("deleteRecord/{id}", [App\Http\Controllers\DeleteRecord::class, 'delete']);
Route::get("getRecord/{id}", [App\Http\Controllers\GetRecord::class, 'get']);
Route::get("getAllRecord", [App\Http\Controllers\GetRecord::class, 'all']);