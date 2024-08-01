<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarrierType\BarrierTypeCreateRequest;
use App\Http\Requests\BarrierType\BarrierTypeUpdateRequest;
use App\Models\BarrierType;
use Illuminate\Http\Request;

class BarrierTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.barrier-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.barrier-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarrierTypeCreateRequest $request)
    {
        try {
            BarrierType::add($request->all());
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
            $barrierType = BarrierType::find($id);
            if($barrierType){
                return  view("dashboard.reference-book.barrier-type.edit",compact("barrierType"));
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
    public function update(BarrierTypeUpdateRequest $request, string $id)
    {
        try {
            $barrierType = BarrierType::find($id);
            if($barrierType){
                $barrierType->edit($request->all());
                return redirect()->route("barrier-type.index");
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
