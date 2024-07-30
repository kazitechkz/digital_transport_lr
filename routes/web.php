<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReferenceBook\CategoryOfHighwayController;
use App\Http\Controllers\ReferenceBook\CoverageTypeController;
use App\Http\Controllers\ReferenceBook\ReferenceBookController;
use App\Http\Controllers\ReferenceBook\SideController;
use App\Http\Controllers\ReferenceBook\WellTypeController;
use App\Http\Controllers\Setting\PermissionController;
use App\Http\Controllers\Setting\RoleController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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
    Route::group(["prefix" => "setting"],function (){
        Route::get('/', [SettingController::class, 'index'])->name('setting.index');
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
    });
    Route::group(["prefix" => "user"],function (){
        Route::get('test', function (){return view('dashboard.user.index');})->name('user.test');
    });
    Route::group(["prefix" => "statement"],function (){
        Route::get('test', function (){return view('dashboard.statement.index');})->name('statement.test');
    });
    Route::group(["prefix" => "reference-book"],function (){
        Route::get("/",[ReferenceBookController::class,"index"])->name("reference-book.index");
        Route::resource("/coverage-type",CoverageTypeController::class);
        Route::resource("/side",SideController::class);
        Route::resource("/category-of-highway",CategoryOfHighwayController::class);
        Route::resource("/well-type",WellTypeController::class);
    });

});
