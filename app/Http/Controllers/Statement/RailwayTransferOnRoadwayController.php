<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\RailwayTransferOnRoadway\RailwayTransferOnRoadwayCreateRequest;
use App\Http\Requests\RailwayTransferOnRoadway\RailwayTransferOnRoadwayUpdateRequest;
use App\Models\RailwayTransferOnRoadway;
use Illuminate\Http\Request;

class RailwayTransferOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.railway-transfer-on-roadway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.railway-transfer-on-roadway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RailwayTransferOnRoadwayCreateRequest $request)
    {
        try {
            RailwayTransferOnRoadway::addWithBoolean($request->all(),$request);
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
            $railwayTransferOnRoadway = RailwayTransferOnRoadway::find($id);
            if($railwayTransferOnRoadway){
                return  view("dashboard.statement.railway-transfer-on-roadway.edit",compact("railwayTransferOnRoadway"));
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
    public function update(RailwayTransferOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $railwayTransferOnRoadway = RailwayTransferOnRoadway::find($id);
            if($railwayTransferOnRoadway){
                $railwayTransferOnRoadway->editWithBoolean($request->all(),$request);
                return redirect()->route("railway-transfer-on-roadway.index");
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
