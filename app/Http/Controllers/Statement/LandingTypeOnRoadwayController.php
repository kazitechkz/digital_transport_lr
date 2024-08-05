<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandingTypeOnRoadway\LandingTypeOnRoadwayCreateRequest;
use App\Models\LandingTypeOnRoadway;
use Illuminate\Http\Request;

class LandingTypeOnRoadwayController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:LandingTypeOnRoadway read')->only(['index']);
            $this->middleware('checkPermission:LandingTypeOnRoadway create')->only(['create', 'store']);
            $this->middleware('checkPermission:LandingTypeOnRoadway update')->only(['edit', 'update']);
            $this->middleware('checkPermission:LandingTypeOnRoadway delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.landing-type-on-roadway.index');
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
            return view('dashboard.statement.landing-type-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LandingTypeOnRoadwayCreateRequest $request)
    {
        try {
            LandingTypeOnRoadway::add($request->all());
            return redirect(route('landing-type-on-roadway.index'));
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
            $model = LandingTypeOnRoadway::findOrFail($id);
            return view('dashboard.statement.landing-type-on-roadway.edit', compact('model'));
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
            $model = LandingTypeOnRoadway::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('landing-type-on-roadway.index'));
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
