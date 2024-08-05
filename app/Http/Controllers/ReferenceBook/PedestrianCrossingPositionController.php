<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\PedestrianCrossingPosition\PedestrianCrossingPositionCreateRequest;
use App\Http\Requests\PedestrianCrossingPosition\PedestrianCrossingPositionUpdateRequest;
use App\Models\PedestrianCrossingPosition;
use Illuminate\Http\Request;

class PedestrianCrossingPositionController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:PedestrianCrossingPosition read')->only(['index']);
            $this->middleware('checkPermission:PedestrianCrossingPosition create')->only(['create', 'store']);
            $this->middleware('checkPermission:PedestrianCrossingPosition update')->only(['edit', 'update']);
            $this->middleware('checkPermission:PedestrianCrossingPosition delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.pedestrian-crossing-position.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.pedestrian-crossing-position.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedestrianCrossingPositionCreateRequest $request)
    {
        try {
            PedestrianCrossingPosition::add($request->all());
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
            $pedestrianCrossingPosition = PedestrianCrossingPosition::find($id);
            if($pedestrianCrossingPosition){
                return  view("dashboard.reference-book.pedestrian-crossing-position.edit",compact("pedestrianCrossingPosition"));
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
    public function update(PedestrianCrossingPositionUpdateRequest $request, string $id)
    {
        try {
            $pedestrianCrossingPosition = PedestrianCrossingPosition::find($id);
            if($pedestrianCrossingPosition){
                $pedestrianCrossingPosition->edit($request->all());
                return redirect()->route("pedestrian-crossing-position.index");
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
