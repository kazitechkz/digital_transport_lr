<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoadMarkingMaterial\RoadMarkingMaterialCreateRequest;
use App\Http\Requests\RoadMarkingMaterial\RoadMarkingMaterialUpdateRequest;
use App\Models\RoadMarkingMaterial;
use Illuminate\Http\Request;

class RoadMarkingMaterialController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:RoadMarkingMaterial read')->only(['index']);
            $this->middleware('checkPermission:RoadMarkingMaterial create')->only(['create', 'store']);
            $this->middleware('checkPermission:RoadMarkingMaterial update')->only(['edit', 'update']);
            $this->middleware('checkPermission:RoadMarkingMaterial delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.road-marking-material.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.road-marking-material.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadMarkingMaterialCreateRequest $request)
    {
        try {
            RoadMarkingMaterial::add($request->all());
            return redirect()->back();
        }
        catch (\Exception $exception){
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
            $roadMarkingMaterial = RoadMarkingMaterial::find($id);
            if($roadMarkingMaterial){
                return  view("dashboard.reference-book.road-marking-material.edit",compact("roadMarkingMaterial"));
            }
            toastr()->warning("Не найдено");
            return redirect()->back();
        }
        catch (\Exception $exception){
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoadMarkingMaterialUpdateRequest $request, string $id)
    {
        try {
            $roadMarkingMaterial = RoadMarkingMaterial::find($id);
            if($roadMarkingMaterial){
                $roadMarkingMaterial->edit($request->all());
                return redirect()->route("road-marking-material.index");
            }
            toastr()->warning("Не найдено");
            return redirect()->back();
        }
        catch (\Exception $exception){
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
