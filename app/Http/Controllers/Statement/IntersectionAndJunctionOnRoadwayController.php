<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntersectionAndJunctionOnRoadway\IntersectionAndJunctionOnRoadwayCreateRequest;
use App\Http\Requests\IntersectionAndJunctionOnRoadway\IntersectionAndJunctionOnRoadwayUpdateRequest;
use App\Models\IntersectionAndJunctionOnRoadway;
use Illuminate\Http\Request;

class IntersectionAndJunctionOnRoadwayController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:IntersectionAndJunctionOnRoadway read')->only(['index']);
            $this->middleware('checkPermission:IntersectionAndJunctionOnRoadway create')->only(['create', 'store']);
            $this->middleware('checkPermission:IntersectionAndJunctionOnRoadway update')->only(['edit', 'update']);
            $this->middleware('checkPermission:IntersectionAndJunctionOnRoadway delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.intersection-and-junction-on-roadway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.intersection-and-junction-on-roadway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IntersectionAndJunctionOnRoadwayCreateRequest $request)
    {
        try {
            IntersectionAndJunctionOnRoadway::addWithBoolean($request->all(),$request);
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
            $intersectionAndJunctionOnRoadway = IntersectionAndJunctionOnRoadway::find($id);
            if($intersectionAndJunctionOnRoadway){
                return  view("dashboard.statement.intersection-and-junction-on-roadway.edit",compact("intersectionAndJunctionOnRoadway"));
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
    public function update(IntersectionAndJunctionOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $intersectionAndJunctionOnRoadway = IntersectionAndJunctionOnRoadway::find($id);
            if($intersectionAndJunctionOnRoadway){
                $intersectionAndJunctionOnRoadway->editWithBoolean($request->all(),$request);
                return redirect()->route("ij-on-roadway.index");
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
