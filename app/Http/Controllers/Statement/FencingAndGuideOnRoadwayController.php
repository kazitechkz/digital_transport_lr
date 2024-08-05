<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\FencingAndGuideOnRoadway\FencingAndGuideOnRoadwayCreateRequest;
use App\Http\Requests\FencingAndGuideOnRoadway\FencingAndGuideOnRoadwayUpdateRequest;
use App\Models\FencingAndGuideOnRoadway;
use Illuminate\Http\Request;

class FencingAndGuideOnRoadwayController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:FencingAndGuideOnRoadway read')->only(['index']);
            $this->middleware('checkPermission:FencingAndGuideOnRoadway create')->only(['create', 'store']);
            $this->middleware('checkPermission:FencingAndGuideOnRoadway update')->only(['edit', 'update']);
            $this->middleware('checkPermission:FencingAndGuideOnRoadway delete')->only('destroy');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.fencing-and-guide-on-roadway.index');
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
            return view('dashboard.statement.fencing-and-guide-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FencingAndGuideOnRoadwayCreateRequest $request)
    {
        try {
            FencingAndGuideOnRoadway::add($request->all());
            return redirect(route('fencing-and-guide-on-roadway.index'));
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
            $model = FencingAndGuideOnRoadway::findOrFail($id);
            return view('dashboard.statement.fencing-and-guide-on-roadway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FencingAndGuideOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $model = FencingAndGuideOnRoadway::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('fencing-and-guide-on-roadway.index'));
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
