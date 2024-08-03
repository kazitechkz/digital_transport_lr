<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LongitudinalProfileOfTheRoad\LongitudinalProfileOfTheRoadCreateRequest;
use App\Http\Requests\LongitudinalProfileOfTheRoad\LongitudinalProfileOfTheRoadUpdateRequest;
use App\Models\LongitudinalProfileOfTheRoad;
use Illuminate\Http\Request;

class LongitudinalProfileOfTheRoadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.longitudinal-profile-of-the-road.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.longitudinal-profile-of-the-road.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LongitudinalProfileOfTheRoadCreateRequest $request)
    {
        try {
            LongitudinalProfileOfTheRoad::addWithBoolean($request->all(),$request);
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
            $longitudinalProfileOfTheRoad = LongitudinalProfileOfTheRoad::find($id);
            if($longitudinalProfileOfTheRoad){
                return  view("dashboard.statement.longitudinal-profile-of-the-road.edit",compact("longitudinalProfileOfTheRoad"));
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
    public function update(LongitudinalProfileOfTheRoadUpdateRequest $request, string $id)
    {
        try {
            $LongitudinalProfileOfTheRoad = LongitudinalProfileOfTheRoad::find($id);
            if($LongitudinalProfileOfTheRoad){
                $LongitudinalProfileOfTheRoad->editWithBoolean($request->all(),$request);
                return redirect()->route("longitudinal-profile-of-the-road.index");
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
