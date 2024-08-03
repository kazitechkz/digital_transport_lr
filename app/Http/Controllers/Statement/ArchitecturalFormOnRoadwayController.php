<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArchitecturalFormOnRoadway\ArchitecturalFormOnRoadwayCreateRequest;
use App\Http\Requests\ArchitecturalFormOnRoadway\ArchitecturalFormOnRoadwayUpdateRequest;
use App\Models\ArchitecturalFormOnRoadway;
use Illuminate\Http\Request;

class ArchitecturalFormOnRoadwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.architectural-form-on-roadway.index');
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
            return view('dashboard.statement.architectural-form-on-roadway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArchitecturalFormOnRoadwayCreateRequest $request)
    {
        try {
            ArchitecturalFormOnRoadway::add($request->all());
            return redirect(route('architectural-form-on-roadway.index'));
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
            $model = ArchitecturalFormOnRoadway::findOrFail($id);
            return view('dashboard.statement.architectural-form-on-roadway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArchitecturalFormOnRoadwayUpdateRequest $request, string $id)
    {
        try {
            $model = ArchitecturalFormOnRoadway::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('architectural-form-on-roadway.index'));
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
