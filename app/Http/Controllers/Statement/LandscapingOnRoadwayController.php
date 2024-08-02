<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandscapingOnRoadway\LandscapingOnRoadwayCreateRequest;
use App\Http\Requests\LandscapingOnRoadway\LandscapingOnRoadwayUpdateRequest;
use App\Models\LandscapingOnRoadway;
use Illuminate\Http\Request;

class LandscapingOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.landscaping-on-roadway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.landscaping-on-roadway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LandscapingOnRoadwayCreateRequest $request)
    {
        try {
            LandscapingOnRoadway::addWithBoolean($request->all(),$request);
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
            $landscapingOnRoadway = LandscapingOnRoadway::find($id);
            if($landscapingOnRoadway){
                return  view("dashboard.statement.landscaping-on-roadway.edit",compact("landscapingOnRoadway"));
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
    public function update(LandscapingOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $LandscapingOnRoadway = LandscapingOnRoadway::find($id);
            if($LandscapingOnRoadway){
                $LandscapingOnRoadway->editWithBoolean($request->all(),$request);
                return redirect()->route("landscaping-on-roadway.index");
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
