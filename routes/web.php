<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReferenceBook\ArchitecturalFormController;
use App\Http\Controllers\ReferenceBook\CategoryOfHighwayController;
use App\Http\Controllers\ReferenceBook\CoverageTypeController;
use App\Http\Controllers\ReferenceBook\LandingTypeController;
use App\Http\Controllers\ReferenceBook\LightingSupportTypeController;
use App\Http\Controllers\ReferenceBook\ReferenceBookController;
use App\Http\Controllers\ReferenceBook\RoadMarkingController;
use App\Http\Controllers\ReferenceBook\RoadMarkingMaterialController;
use App\Http\Controllers\ReferenceBook\SideController;
use App\Http\Controllers\ReferenceBook\TypeTrafficLightController;
use App\Http\Controllers\ReferenceBook\WellTypeController;
use App\Http\Controllers\Setting\PermissionController;
use App\Http\Controllers\Setting\RoleController;
use App\Http\Controllers\Setting\DashboardController as SettingDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\DepartmentController;
use App\Http\Controllers\User\EmployeeController;
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

Route::group(["prefix" => "dashboard"],function () {
    Route::get("/",[DashboardController::class,"index"])->name("dashboard.index");
    Route::group(["prefix" => "setting"],function () {
        Route::get('/', [SettingDashboardController::class, 'index'])->name('setting.dashboard');
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
    });
    Route::group(["prefix" => "user"],function () {
        Route::get('/', [UserDashboardController::class, 'index'])->name('user.dashboard');
        Route::resource('/employee', EmployeeController::class);
        Route::resource('/department', DepartmentController::class);
    });
    Route::group(["prefix" => "statement"],function () {
        Route::get('test', function (){return view('dashboard.statement.index');})->name('statement.test');
    });
    Route::group(["prefix" => "reference-book"],function () {
        Route::get("/",[ReferenceBookController::class,"index"])->name("reference-book.index");
        Route::resource("/coverage-type",CoverageTypeController::class);
        Route::resource("/side",SideController::class);
        Route::resource("/category-of-highway",CategoryOfHighwayController::class);
        Route::resource("/well-type",WellTypeController::class);
        Route::resource("/road-marking",RoadMarkingController::class);
        Route::resource("/architectural-form",ArchitecturalFormController::class);
        Route::resource("/road-marking-material",RoadMarkingMaterialController::class);
        Route::resource("/type-traffic-light",TypeTrafficLightController::class);
        Route::resource("/landing-type",LandingTypeController::class);
        Route::resource("/lighting-support-type",LightingSupportTypeController::class);
    });

});
