<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\PedestrianCrossingType\PedestrianCrossingTypeCreateRequest;
use App\Http\Requests\PedestrianCrossingType\PedestrianCrossingTypeUpdateRequest;
use App\Models\PedestrianCrossingType;
use Illuminate\Http\Request;

class PedestrianCrossingTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:PedestrianCrossingType read')->only(['index']);
            $this->middleware('checkPermission:PedestrianCrossingType create')->only(['create', 'store']);
            $this->middleware('checkPermission:PedestrianCrossingType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:PedestrianCrossingType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.pedestrian-crossing-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.pedestrian-crossing-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedestrianCrossingTypeCreateRequest $request)
    {
        try {
            PedestrianCrossingType::add($request->all());
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
            $pedestrianCrossingType = PedestrianCrossingType::find($id);
            if($pedestrianCrossingType){
                return  view("dashboard.reference-book.pedestrian-crossing-type.edit",compact("pedestrianCrossingType"));
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
    public function update(PedestrianCrossingTypeUpdateRequest $request, string $id)
    {
        try {
            $PedestrianCrossingType = PedestrianCrossingType::find($id);
            if($PedestrianCrossingType){
                $PedestrianCrossingType->edit($request->all());
                return redirect()->route("pedestrian-crossing-type.index");
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
