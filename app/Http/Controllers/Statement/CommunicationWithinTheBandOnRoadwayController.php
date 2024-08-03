<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommunicationWithinTheBandOnRoadway\CommunicationWithinTheBandOnRoadwayCreateRequest;
use App\Http\Requests\CommunicationWithinTheBandOnRoadway\CommunicationWithinTheBandOnRoadwayUpdateRequest;
use App\Models\CommunicationWithinTheBandOnRoadway;
use Illuminate\Http\Request;

class CommunicationWithinTheBandOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.communication-within-the-band-on-roadway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.communication-within-the-band-on-roadway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommunicationWithinTheBandOnRoadwayCreateRequest $request)
    {
        try {
            CommunicationWithinTheBandOnRoadway::addWithBoolean($request->all(),$request);
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
            $communicationWithinTheBandOnRoadway = CommunicationWithinTheBandOnRoadway::find($id);
            if($communicationWithinTheBandOnRoadway){
                return  view("dashboard.statement.communication-within-the-band-on-roadway.edit",compact("communicationWithinTheBandOnRoadway"));
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
    public function update(CommunicationWithinTheBandOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $CommunicationWithinTheBandOnRoadway = CommunicationWithinTheBandOnRoadway::find($id);
            if($CommunicationWithinTheBandOnRoadway){
                $CommunicationWithinTheBandOnRoadway->editWithBoolean($request->all(),$request);
                return redirect()->route("cwb-on-roadway.index");
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
