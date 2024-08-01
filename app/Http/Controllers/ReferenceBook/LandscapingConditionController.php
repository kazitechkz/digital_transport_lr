<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandscapingCondition\LandscapingConditionCreateRequest;
use App\Http\Requests\LandscapingCondition\LandscapingConditionUpdateRequest;
use App\Models\LandscapingCondition;
use Illuminate\Http\Request;

class LandscapingConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.landscaping-condition.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.landscaping-condition.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LandscapingConditionCreateRequest $request)
    {
        try {
            LandscapingCondition::add($request->all());
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
            $landscapingCondition = LandscapingCondition::find($id);
            if($landscapingCondition){
                return  view("dashboard.reference-book.landscaping-condition.edit",compact("landscapingCondition"));
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
    public function update(LandscapingConditionUpdateRequest $request, string $id)
    {
        try {
            $LandscapingCondition = LandscapingCondition::find($id);
            if($LandscapingCondition){
                $LandscapingCondition->edit($request->all());
                return redirect()->route("landscaping-condition.index");
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
