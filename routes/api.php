<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\CategoriesController;
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

// Route::middleware('auth:sanctum')->resource('/reviews',ReviewsController::class);

Route::resource('/reviews',ReviewsController::class);

Route::resource('/owners',OwnersController::class);

Route::resource('/buildings',BuildingsController::class);

Route::get('/search/category',[CategoriesController::class,'category']);