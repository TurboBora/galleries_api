<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can login API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('current-user', [AuthController::class, 'currentUser']);
    Route::post('refresh-token', [AuthController::class, 'refreshToken']);
// });

// Route::middleware('guest:api')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
// });

Route::get('/galleries', [GalleryController::class, 'index']);
Route::get('/my-galleries', [UserController::class, 'myGalleries']);
// Route::get('/galleries/{id}', [GalleryController::class, 'show']);