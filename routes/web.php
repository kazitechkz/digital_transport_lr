<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReferenceBook\ArchitecturalFormController;
use App\Http\Controllers\ReferenceBook\BarrierTypeController;
use App\Http\Controllers\ReferenceBook\CategoryOfHighwayController;
use App\Http\Controllers\ReferenceBook\CommunicationTypeController;
use App\Http\Controllers\ReferenceBook\CoverageTypeController;
use App\Http\Controllers\ReferenceBook\FencingAndGuideTypeController;
use App\Http\Controllers\ReferenceBook\FlooringConditionController;
use App\Http\Controllers\ReferenceBook\LandingTypeController;
use App\Http\Controllers\ReferenceBook\LandscapingConditionController;
use App\Http\Controllers\ReferenceBook\LightingSupportTypeController;
use App\Http\Controllers\ReferenceBook\PedestrianCrossingPositionController;
use App\Http\Controllers\ReferenceBook\PedestrianCrossingTypeController;
use App\Http\Controllers\ReferenceBook\ReferenceBookController;
use App\Http\Controllers\ReferenceBook\RoadMarkingController;
use App\Http\Controllers\ReferenceBook\RoadMarkingMaterialController;
use App\Http\Controllers\ReferenceBook\RoadSignConditionController;
use App\Http\Controllers\ReferenceBook\RoadSignController;
use App\Http\Controllers\ReferenceBook\RoadSignMaterialController;
use App\Http\Controllers\ReferenceBook\SideController;
use App\Http\Controllers\ReferenceBook\SideStoneStampController;
use App\Http\Controllers\ReferenceBook\SideStoneTypeController;
use App\Http\Controllers\ReferenceBook\TypeTrafficLightController;
use App\Http\Controllers\ReferenceBook\UnitController;
use App\Http\Controllers\ReferenceBook\WellTypeController;
use App\Http\Controllers\Setting\DashboardController as SettingDashboardController;
use App\Http\Controllers\Setting\PermissionController;
use App\Http\Controllers\Setting\RoleController;
use App\Http\Controllers\Statement\ArchitecturalFormOnRoadwayController;
use App\Http\Controllers\Statement\DashboardController as StatementDashboardController;
use App\Http\Controllers\Statement\FencingAndGuideOnRoadwayController;
use App\Http\Controllers\Statement\InformationOfRoadMarkingController;
use App\Http\Controllers\Statement\LandingTypeOnRoadwayController;
use App\Http\Controllers\Statement\LengthOfTheRoadSurfaceController;
use App\Http\Controllers\Statement\LightingOnRoadwayController;
use App\Http\Controllers\Statement\PedestrianCrossingOnRoadwayController;
use App\Http\Controllers\Statement\PublicStopsOnTheHighwayController;
use App\Http\Controllers\Statement\RoadwayController;
use App\Http\Controllers\Statement\SideStoneOnRoadwayController;
use App\Http\Controllers\Statement\SidewalkOnRoadwayController;
use App\Http\Controllers\Statement\SpillwayInfrastructureController;
use App\Http\Controllers\Statement\TrafficLightOnRoadwayController;
use App\Http\Controllers\Statement\LongitudinalProfileOfTheRoadController;
use App\Http\Controllers\Statement\RailwayTransferOnRoadwayController;
use App\Http\Controllers\Statement\WidthRoadwayOnHighwayController;
use App\Http\Controllers\Statement\StreetController;
use App\Http\Controllers\Statement\LandscapingOnRoadwayController;
use App\Http\Controllers\Statement\CommunicationWithinTheBandOnRoadwayController;
use App\Http\Controllers\Statement\IntersectionAndJunctionOnRoadwayController;
use App\Http\Controllers\Statement\RoadSignOnRoadwayController;
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
   Route::get('logout', function () {
       Auth::logout();
       return redirect(route('login'));
   })->name('logout');
});

Route::group(["prefix" => "dashboard", "middleware" => "auth"],function () {
    Route::get("/",[DashboardController::class,"index"])->name("dashboard.index");
    Route::group(["prefix" => "setting", "middleware" => "checkPermission:setting management"],function () {
        Route::get('/', [SettingDashboardController::class, 'index'])->name('setting.dashboard');
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
    });
    Route::group(["prefix" => "user", "middleware" => "checkPermission:user management"],function () {
        Route::get('/', [UserDashboardController::class, 'index'])->name('user.dashboard');
        Route::resource('/employee', EmployeeController::class);
        Route::resource('/department', DepartmentController::class);
    });
    Route::group(["prefix" => "statement", "middleware" => "checkPermission:statement management"],function () {
        Route::get('/', [StatementDashboardController::class, 'index'])->name('statement.dashboard');
        Route::resource('/street', StreetController::class);
        Route::resource('/length-of-the-road-surface', LengthOfTheRoadSurfaceController::class);
        Route::resource('/roadway', RoadwayController::class);
        Route::resource('/spillway-infrastructure', SpillwayInfrastructureController::class);
        Route::resource('/railway-transfer-on-roadway', RailwayTransferOnRoadwayController::class);
        Route::resource('/width-roadway-on-highway', WidthRoadwayOnHighwayController::class);
        Route::resource('/longitudinal-profile-of-the-road', LongitudinalProfileOfTheRoadController::class);
        Route::resource('/landscaping-on-roadway', LandscapingOnRoadwayController::class);
        Route::resource('/ij-on-roadway', IntersectionAndJunctionOnRoadwayController::class);
        Route::resource('/cwb-on-roadway', CommunicationWithinTheBandOnRoadwayController::class);
        Route::resource('/road-sign-on-roadway', RoadSignOnRoadwayController::class);
        Route::resource('/information-of-road-marking', InformationOfRoadMarkingController::class);
        Route::resource('/architectural-form-on-roadway', ArchitecturalFormOnRoadwayController::class);
        Route::resource('/traffic-light-on-roadway', TrafficLightOnRoadwayController::class);
        Route::resource('/landing-type-on-roadway', LandingTypeOnRoadwayController::class);
        Route::resource('/public-stops-on-the-highway', PublicStopsOnTheHighwayController::class);
        Route::resource('/lighting-on-roadway', LightingOnRoadwayController::class);
        Route::resource('/fencing-and-guide-on-roadway', FencingAndGuideOnRoadwayController::class);
        Route::resource('/side-stone-on-roadway', SideStoneOnRoadwayController::class);
        Route::resource('/sidewalk-on-roadway', SidewalkOnRoadwayController::class);
        Route::resource('/pedestrian-crossing-on-roadway', PedestrianCrossingOnRoadwayController::class);
    });
    Route::group(["prefix" => "reference-book", "middleware" => "checkPermission:referenceBook management"],function () {
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
        Route::resource("/unit",UnitController::class);
        Route::resource("/fencing-and-guide-type",FencingAndGuideTypeController::class);
        Route::resource("/side-stone-type",SideStoneTypeController::class);
        Route::resource("/side-stone-stamp",SideStoneStampController::class);
        Route::resource("/pedestrian-crossing-type",PedestrianCrossingTypeController::class);
        Route::resource("/pedestrian-crossing-position",PedestrianCrossingPositionController::class);
        Route::resource("/barrier-type",BarrierTypeController::class);
        Route::resource("/flooring-condition",FlooringConditionController::class);
        Route::resource("/landscaping-condition",LandscapingConditionController::class);
        Route::resource("/communication-type",CommunicationTypeController::class);
        Route::resource("/road-sign",RoadSignController::class);
        Route::resource("/road-sign-condition",RoadSignConditionController::class);
        Route::resource("/road-sign-material",RoadSignMaterialController::class);
    });
});

Route::get('not-found', function () {
    return view('not-found');
})->name('not-found');
Route::get('bad-request', function () {
    $backUrl = url()->previous();
    return view('bad-request', compact('backUrl'));
})->name('bad-request');
