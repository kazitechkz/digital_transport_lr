<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReferenceBook\ReferenceBookController;
use App\Http\Controllers\ReferenceBook\CoverageTypeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "auth"],function (){
   Route::get("login",[AuthController::class,"login"])->name("login");
   Route::post("auth",[AuthController::class,"auth"])->name("auth");
});

Route::group(["prefix" => "dashboard"],function (){
    Route::get("/",[DashboardController::class,"index"])->name("dashboard.index");
    Route::group(["prefix" => "user"],function (){
        Route::get('test', function (){return view('user.index');})->name('user.test');
    });
    Route::group(["prefix" => "statement"],function (){
        Route::get('test', function (){return view('statement.index');})->name('statement.test');
    });
    Route::group(["prefix" => "reference-book"],function (){
        Route::get("/",[ReferenceBookController::class,"index"])->name("reference-book.index");
        Route::resource("/coverage-type",CoverageTypeController::class);
    });

});
