<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\WidthRoadwayOnHighway\WidthRoadwayOnHighwayCreateRequest;
use App\Http\Requests\WidthRoadwayOnHighway\WidthRoadwayOnHighwayUpdateRequest;
use App\Models\WidthRoadwayOnHighway;
use Illuminate\Http\Request;

class WidthRoadwayOnHighwayController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:WidthRoadwayOnHighway read')->only(['index']);
            $this->middleware('checkPermission:WidthRoadwayOnHighway create')->only(['create', 'store']);
            $this->middleware('checkPermission:WidthRoadwayOnHighway update')->only(['edit', 'update']);
            $this->middleware('checkPermission:WidthRoadwayOnHighway delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.width-roadway-on-highway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.width-roadway-on-highway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WidthRoadwayOnHighwayCreateRequest $request)
    {
        try {
            WidthRoadwayOnHighway::addWithBoolean($request->all(),$request);
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
            $widthRoadwayOnHighway = WidthRoadwayOnHighway::find($id);
            if($widthRoadwayOnHighway){
                return  view("dashboard.statement.width-roadway-on-highway.edit",compact("widthRoadwayOnHighway"));
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
    public function update(WidthRoadwayOnHighwayUpdateRequest $request, string $id)
    {
        try {
            $WidthRoadwayOnHighway = WidthRoadwayOnHighway::find($id);
            if($WidthRoadwayOnHighway){
                $WidthRoadwayOnHighway->editWithBoolean($request->all(),$request);
                return redirect()->route("width-roadway-on-highway.index");
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
