<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoadSignCondition\RoadSignConditionCreateRequest;
use App\Http\Requests\RoadSignCondition\RoadSignConditionUpdateRequest;
use App\Models\RoadSignCondition;
use Illuminate\Http\Request;

class RoadSignConditionController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:RoadSignCondition read')->only(['index']);
            $this->middleware('checkPermission:RoadSignCondition create')->only(['create', 'store']);
            $this->middleware('checkPermission:RoadSignCondition update')->only(['edit', 'update']);
            $this->middleware('checkPermission:RoadSignCondition delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.road-sign-condition.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.road-sign-condition.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoadSignConditionCreateRequest $request)
    {
        try {
            RoadSignCondition::add($request->all());
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
            $roadSignCondition = RoadSignCondition::find($id);
            if($roadSignCondition){
                return  view("dashboard.reference-book.road-sign-condition.edit",compact("roadSignCondition"));
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
    public function update(RoadSignConditionUpdateRequest $request, string $id)
    {
        try {
            $RoadSignCondition = RoadSignCondition::find($id);
            if($RoadSignCondition){
                $RoadSignCondition->edit($request->all());
                return redirect()->route("road-sign-condition.index");
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
