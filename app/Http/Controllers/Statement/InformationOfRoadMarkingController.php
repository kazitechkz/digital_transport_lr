<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\InformationOfRoadMarking\InformationOfRoadMarkingCreateRequest;
use App\Http\Requests\InformationOfRoadMarking\InformationOfRoadMarkingUpdateRequest;
use App\Models\InformationOfRoadMarking;
use Illuminate\Http\Request;

class InformationOfRoadMarkingController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:InformationOfRoadMarking read')->only(['index']);
            $this->middleware('checkPermission:InformationOfRoadMarking create')->only(['create', 'store']);
            $this->middleware('checkPermission:InformationOfRoadMarking update')->only(['edit', 'update']);
            $this->middleware('checkPermission:InformationOfRoadMarking delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.information-of-road-marking.index');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('dashboard.statement.information-of-road-marking.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InformationOfRoadMarkingCreateRequest $request)
    {
        try {
            InformationOfRoadMarking::add($request->all());
            return redirect(route('information-of-road-marking.index'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
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
            $informationOfRoadMarking = InformationOfRoadMarking::findOrFail($id);
            return view('dashboard.statement.information-of-road-marking.edit', compact('informationOfRoadMarking'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InformationOfRoadMarkingUpdateRequest $request, string $id)
    {
        try {
            $model = InformationOfRoadMarking::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('information-of-road-marking.index'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
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
