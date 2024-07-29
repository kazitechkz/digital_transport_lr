<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::group(["prefix" => "dashboard", "middleware" => "auth"],function (){
    Route::get("/",[DashboardController::class,"index"])->name("dashboard.index");
});
