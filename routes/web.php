<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cars\CarController;
use App\Http\Controllers\Cars\CarsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/cars/', 'as' => 'cars.'], function(){

    Route::get('/cars/list', [CarsController::class, 'list'])->name('list');

    Route::get('/cars/show/{id}', [CarController::class, 'show'])->name('show');

    Route::get('destroy/{id}', [CarController::class, 'destroy'])->name('destroy');

   

});

Route::get('/{any}', [HomeController::class, 'homePage'])->where('any','.*');