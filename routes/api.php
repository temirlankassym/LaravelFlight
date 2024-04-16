<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PassengerController;
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

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::group(['middleware' => 'jwt.auth'], function (){
    Route::prefix('/companies')->group(function (){
        Route::get('/',[CompanyController::class,'index']);
        Route::get('/{company}',[CompanyController::class,'show']);
        Route::put('/{company}',[CompanyController::class,'update']);
        Route::post('/',[CompanyController::class,'store']);
        Route::delete('/{company}',[CompanyController::class,'destroy']);
    });

    Route::prefix('/countries')->group(function (){
        Route::get('/',[CountryController::class,'index']);
        Route::get('/{country}',[CountryController::class,'show']);
        Route::put('/{country}',[CountryController::class,'update']);
        Route::post('/',[CountryController::class,'store']);
        Route::delete('/{country}',[CountryController::class,'destroy']);
    });

    Route::prefix('/locations')->group(function (){
        Route::get('/',[LocationController::class,'index']);
        Route::get('/{location}',[LocationController::class,'show']);
        Route::put('/{location}',[LocationController::class,'update']);
        Route::post('/',[LocationController::class,'store']);
        Route::delete('/{location}',[LocationController::class,'destroy']);
    });

    Route::get('/passenger', [PassengerController::class, 'index']);
    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/countries', [CountryController::class, 'index']);

    Route::get('/flights',[FlightsController::class,'index']);
});
