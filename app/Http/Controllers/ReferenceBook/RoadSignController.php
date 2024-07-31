<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoadSign\RoadSignCreateRequest;
use App\Http\Requests\RoadSign\RoadSignUpdateRequest;
use App\Models\RoadSign;
use Illuminate\Http\Request;

class RoadSignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.road-sign.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.road-sign.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadSignCreateRequest $request)
    {
        try {
            $input = $request->all();
            $input["is_active"] = $request->boolean("is_active");
            RoadSign::add($input);
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
            $roadSign = RoadSign::find($id);
            if($roadSign){
                return  view("dashboard.reference-book.road-sign.edit",compact("roadSign"));
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
    public function update(RoadSignUpdateRequest $request, string $id)
    {
        try {
            $roadSign = RoadSign::find($id);
            if($roadSign){
                $input = $request->all();
                $input["is_active"] = $request->boolean("is_active");
                $roadSign->edit($input);
                return redirect()->route("road-sign.index");
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
