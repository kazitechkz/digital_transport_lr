<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpillwayInfrastructure\SpillwayInfrastructureCreateRequest;
use App\Http\Requests\SpillwayInfrastructure\SpillwayInfrastructureUpdateRequest;
use App\Models\SpillwayInfrastructure;
use Illuminate\Http\Request;

class SpillwayInfrastructureController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:SpillwayInfrastructure read')->only(['index']);
            $this->middleware('checkPermission:SpillwayInfrastructure create')->only(['create', 'store']);
            $this->middleware('checkPermission:SpillwayInfrastructure update')->only(['edit', 'update']);
            $this->middleware('checkPermission:SpillwayInfrastructure delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.spillway-infrastructure.index');
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
            return view('dashboard.statement.spillway-infrastructure.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpillwayInfrastructureCreateRequest $request)
    {
        try {
            $input = $request->all();
            $input['is_on_the_roadway'] = $request->has('is_on_the_roadway') ? 1 : 0;
            $input['is_on_the_sidewalk'] = $request->has('is_on_the_sidewalk') ? 1 : 0;
            $input['is_on_the_lawn'] = $request->has('is_on_the_lawn') ? 1 : 0;
            SpillwayInfrastructure::add($input);
            return redirect(route('spillway-infrastructure.index'));
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
            $spillway = SpillwayInfrastructure::findOrFail($id);
            return view('dashboard.statement.spillway-infrastructure.edit', compact('spillway'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpillwayInfrastructureUpdateRequest $request, string $id)
    {
        try {
            $spillway = SpillwayInfrastructure::findOrFail($id);
            $input = $request->all();
            $input['is_on_the_roadway'] = $request->has('is_on_the_roadway') ? 1 : 0;
            $input['is_on_the_sidewalk'] = $request->has('is_on_the_sidewalk') ? 1 : 0;
            $input['is_on_the_lawn'] = $request->has('is_on_the_lawn') ? 1 : 0;
            $spillway->edit($input);
            return redirect(route('spillway-infrastructure.index'));
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
