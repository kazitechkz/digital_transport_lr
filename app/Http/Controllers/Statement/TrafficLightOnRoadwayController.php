<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrafficLightOnRoadway\TrafficLightOnRoadwayCreateRequest;
use App\Models\TrafficLightOnRoadway;
use Illuminate\Http\Request;

class TrafficLightOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.traffic-light-on-roadway.index');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('dashboard.statement.traffic-light-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrafficLightOnRoadwayCreateRequest $request)
    {
        try {
            $input = $request->all();
            $input['have_controller'] = $request->has('have_controller') ? 1 : 0;
            $input['have_column'] = $request->has('have_column') ? 1 : 0;
            TrafficLightOnRoadway::add($input);
            return redirect(route('traffic-light-on-roadway.index'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
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
            $model = TrafficLightOnRoadway::findOrFail($id);
            return view('dashboard.statement.traffic-light-on-roadway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $model = TrafficLightOnRoadway::findOrFail($id);
            $input['have_controller'] = $request->has('have_controller') ? 1 : 0;
            $input['have_column'] = $request->has('have_column') ? 1 : 0;
            $model->edit($input);
            return redirect(route('traffic-light-on-roadway.index'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
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
