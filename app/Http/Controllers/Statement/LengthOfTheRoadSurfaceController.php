<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LengthOfTheRoadSurface\LengthOfTheRoadSurfaceCreateRequest;
use App\Http\Requests\LengthOfTheRoadSurface\LengthOfTheRoadSurfaceUpdateRequest;
use App\Models\CoverageType;
use App\Models\LengthOfTheRoadSurface;
use App\Models\Street;
use Illuminate\Http\Request;

class LengthOfTheRoadSurfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.length-of-the-road-surface.index');
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
            $streets = Street::all();
            $coverages = CoverageType::all();
            return view('dashboard.statement.length-of-the-road-surface.create', compact('streets', 'coverages'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LengthOfTheRoadSurfaceCreateRequest $request)
    {
        try {
            LengthOfTheRoadSurface::add($request->all());
            return redirect(route('length-of-the-road-surface.index'));
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
            $lengthOfTheRoadSurface = LengthOfTheRoadSurface::findOrFail($id);
            $streets = Street::all();
            $coverages = CoverageType::all();
            return view('dashboard.statement.length-of-the-road-surface.edit', compact('lengthOfTheRoadSurface', 'streets', 'coverages'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LengthOfTheRoadSurfaceUpdateRequest $request, string $id)
    {
        try {
            $lengthOfTheRoadSurface = LengthOfTheRoadSurface::findOrFail($id);
            $lengthOfTheRoadSurface->edit($request->all());
            return redirect(route('length-of-the-road-surface.index'));
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
