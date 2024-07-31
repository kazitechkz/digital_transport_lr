<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlooringCondition\FlooringConditionCreateRequest;
use App\Http\Requests\FlooringCondition\FlooringConditionUpdateRequest;
use App\Models\FlooringCondition;
use Illuminate\Http\Request;

class FlooringConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.flooring-condition.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.flooring-condition.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FlooringConditionCreateRequest $request)
    {
        try {
            FlooringCondition::add($request->all());
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
            $flooringCondition = FlooringCondition::find($id);
            if($flooringCondition){
                return  view("dashboard.reference-book.flooring-condition.edit",compact("flooringCondition"));
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
    public function update(FlooringConditionUpdateRequest $request, string $id)
    {
        try {
            $flooringCondition = FlooringCondition::find($id);
            if($flooringCondition){
                $flooringCondition->edit($request->all());
                return redirect()->route("flooring-condition.index");
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
