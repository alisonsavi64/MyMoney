<?php

use App\Http\Controllers\AuthController;
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

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::get('auth/me', [AuthController::class, 'me'])->middleware('auth:api');

// Route::post('user', [UserController::class, 'store']);

// Route::group(['middleware' => 'auth:api', 'prefix' => 'user'], function () {
    // Route::get('/', [UserController::class, 'edit']);
    // Route::put('/', [UserController::class, 'update']);
    // Route::delete('/', [UserController::class, 'destroy']);
// });
