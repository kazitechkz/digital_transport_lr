<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\PedestrianCrossingOnRoadway\PedestrianCrossingOnRoadwayCreateRequest;
use App\Http\Requests\PedestrianCrossingOnRoadway\PedestrianCrossingOnRoadwayUpdateRequest;
use App\Models\PedestrianCrossingOnRoadway;
use Illuminate\Http\Request;

class PedestrianCrossingOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.pedestrian-crossing-on-roadway.index');
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
            return view('dashboard.statement.pedestrian-crossing-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedestrianCrossingOnRoadwayCreateRequest $request)
    {
        try {
            $input = $request->all();
            $input['bus_stop_has_pedestrian'] = $request->has('bus_stop_has_pedestrian') ? 1 : 0;
            PedestrianCrossingOnRoadway::add($input);
            return redirect(route('pedestrian-crossing-on-roadway.index'));
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
            $model = PedestrianCrossingOnRoadway::findOrFail($id);
            return view('dashboard.statement.pedestrian-crossing-on-roadway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PedestrianCrossingOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $model = PedestrianCrossingOnRoadway::findOrFail($id);
            $input = $request->all();
            $input['bus_stop_has_pedestrian'] = $request->has('bus_stop_has_pedestrian') ? 1 : 0;
            $model->edit($input);
            return redirect(route('pedestrian-crossing-on-roadway.index'));
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
