<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoadSignOnRoadway\RoadSignOnRoadwayCreateRequest;
use App\Http\Requests\RoadSignOnRoadway\RoadSignOnRoadwayUpdateRequest;
use App\Models\RoadSignOnRoadway;
use Illuminate\Http\Request;

class RoadSignOnRoadwayController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:RoadSignOnRoadway read')->only(['index']);
            $this->middleware('checkPermission:RoadSignOnRoadway create')->only(['create', 'store']);
            $this->middleware('checkPermission:RoadSignOnRoadway update')->only(['edit', 'update']);
            $this->middleware('checkPermission:RoadSignOnRoadway delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.road-sign-on-roadway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.road-sign-on-roadway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadSignOnRoadwayCreateRequest $request)
    {
        try {
            RoadSignOnRoadway::addWithBoolean($request->all(),$request);
            return redirect()->back();
        }
        catch (\Exception $exception){
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $roadSignOnRoadway = RoadSignOnRoadway::find($id);
            if($roadSignOnRoadway){
                return  view("dashboard.statement.road-sign-on-roadway.edit",compact("roadSignOnRoadway"));
            }
            toastr()->warning("Не найдено");
            return redirect()->back();
        }
        catch (\Exception $exception){
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoadSignOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $RoadSignOnRoadway = RoadSignOnRoadway::find($id);
            if($RoadSignOnRoadway){
                $RoadSignOnRoadway->editWithBoolean($request->all(),$request);
                return redirect()->route("road-sign-on-roadway.index");
            }
            toastr()->warning("Не найдено");
            return redirect()->back();
        }
        catch (\Exception $exception){
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
