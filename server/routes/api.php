<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiCropController;
use App\Http\Controllers\ApiUserController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

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



//Route::resource(name:'students', controller:\App\Http\Controllers\ApiStudentController::class);
Route::get('crops', [ApiCropController::class,'index']);
Route::get('crop/{id}', [ApiCropController::class,'show']);
Route::post('crops', [ApiCropController::class,'store']);
Route::put('crop/{id}', [ApiCropController::class,'update']);
Route::delete('crop/{id}', [ApiCropController::class,'delete']);

// authentication routes
Route::post('register', [ApiUserController::class,'store']);
Route::post('login', [ApiUserController::class,'login']);

// private routes
Route::group(
    ['Middleware' => ['auth:sanctum']],
    function () {
        Route::put('crop/{id}', [ApiCropController::class, 'update']);
        Route::post('crops', [ApiCropController::class,'store']);
        Route::post('logout', [ApiUserController::class,'logout']);
    }
);


