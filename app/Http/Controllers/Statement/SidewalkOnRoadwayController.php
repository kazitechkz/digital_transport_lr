<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\SidewalkOnRoadway\SidewalkOnRoadwayCreateRequest;
use App\Http\Requests\SidewalkOnRoadway\SidewalkOnRoadwayUpdateRequest;
use App\Models\SidewalkOnRoadway;
use Illuminate\Http\Request;

class SidewalkOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.sidewalk-on-roadway.index');
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
            return view('dashboard.statement.sidewalk-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SidewalkOnRoadwayCreateRequest $request)
    {
        try {
            SidewalkOnRoadway::add($request->all());
            return redirect(route('sidewalk-on-roadway.index'));
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
            $model = SidewalkOnRoadway::findOrFail($id);
            return view('dashboard.statement.sidewalk-on-roadway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SidewalkOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $model = SidewalkOnRoadway::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('sidewalk-on-roadway.index'));
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
