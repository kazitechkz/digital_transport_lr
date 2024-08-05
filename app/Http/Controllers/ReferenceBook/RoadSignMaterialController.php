<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoadSignMaterial\RoadSignMaterialCreateRequest;
use App\Http\Requests\RoadSignMaterial\RoadSignMaterialUpdateRequest;
use App\Models\RoadSignMaterial;
use Illuminate\Http\Request;

class RoadSignMaterialController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:RoadSignMaterial read')->only(['index']);
            $this->middleware('checkPermission:RoadSignMaterial create')->only(['create', 'store']);
            $this->middleware('checkPermission:RoadSignMaterial update')->only(['edit', 'update']);
            $this->middleware('checkPermission:RoadSignMaterial delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.road-sign-material.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.road-sign-material.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadSignMaterialCreateRequest $request)
    {
        try {
            RoadSignMaterial::add($request->all());
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
            $roadSignMaterial = RoadSignMaterial::find($id);
            if($roadSignMaterial){
                return  view("dashboard.reference-book.road-sign-material.edit",compact("roadSignMaterial"));
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
    public function update(RoadSignMaterialUpdateRequest $request, string $id)
    {
        try {
            $RoadSignMaterial = RoadSignMaterial::find($id);
            if($RoadSignMaterial){
                $RoadSignMaterial->edit($request->all());
                return redirect()->route("road-sign-material.index");
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
