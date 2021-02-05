<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\UserController;
use App\Http\RolController;
use App\Http\Configuration;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('users', [UserController::class , 'index']);

Route::get('/users',[UserController::class , 'index']);
Route::post('/user',[UserController::class , 'store']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


Route::get("/rols",[RolController::class , 'index']);
Route::post("/rol",[RolController::class , 'store']);

Route::get("/configurations",[ConfigurationController::class , 'index']);
Route::post("/configuration",[ConfigurationController::class , 'store']);