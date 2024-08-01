<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roadway\RoadwayCreateRequest;
use App\Http\Requests\Roadway\RoadwayUpdateRequest;
use App\Models\Roadway;
use Illuminate\Http\Request;

class RoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.roadway.index');
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
            return view('dashboard.statement.roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadwayCreateRequest $request)
    {
        try {
            Roadway::add($request->all());
            return redirect(route('roadway.index'));
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
            $roadway = Roadway::findOrFail($id);
            return view('dashboard.statement.roadway.edit', compact('roadway'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoadwayUpdateRequest $request, string $id)
    {
        try {
            $roadway = Roadway::findOrFail($id);
            $roadway->edit($request->all());
            return redirect(route('roadway.index'));
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
