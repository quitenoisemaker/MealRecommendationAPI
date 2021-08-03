<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MealController;
// use App\Http\Controllers\AllergiesController;

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

Route::apiResource('/allergy', AllergiesController::class);

Route::get('/allmeals', 'MealController@allMeal');

Route::group(['prefix' => 'allergy'], function () {
    Route::apiResource('/{allergies}/meals', MealController::class);
    Route::get('/user/{id}', 'MealUserController@show');
});
