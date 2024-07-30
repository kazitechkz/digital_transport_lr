<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoadMarking\RoadMarkingCreateRequest;
use App\Http\Requests\RoadMarking\RoadMarkingUpdateRequest;
use App\Models\RoadMarking;
use Illuminate\Http\Request;

class RoadMarkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.road-marking.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.road-marking.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadMarkingCreateRequest $request)
    {
        try {
            RoadMarking::add($request->all());
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
            $roadMarking = RoadMarking::find($id);
            if($roadMarking){
                return  view("dashboard.reference-book.road-marking.edit",compact("roadMarking"));
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
    public function update(RoadMarkingUpdateRequest $request, string $id)
    {
        try {
            $roadMarking = RoadMarking::find($id);
            if($roadMarking){
                $roadMarking->edit($request->all());
                return redirect()->route("road-marking.index");
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
