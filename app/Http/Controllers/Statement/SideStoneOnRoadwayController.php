<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\SideStoneOnRoadway\SideStoneOnRoadwayCreateRequest;
use App\Http\Requests\SideStoneOnRoadway\SideStoneOnRoadwayUpdateRequest;
use App\Models\SideStoneOnRoadway;
use Illuminate\Http\Request;

class SideStoneOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.side-stone-on-roadway.index');
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
            return view('dashboard.statement.side-stone-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SideStoneOnRoadwayCreateRequest $request)
    {
        try {
            SideStoneOnRoadway::add($request->all());
            return redirect(route('side-stone-on-roadway.index'));
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
            $model = SideStoneOnRoadway::findOrFail($id);
            return view('dashboard.statement.side-stone-on-roadway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SideStoneOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $model = SideStoneOnRoadway::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('side-stone-on-roadway.index'));
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
