<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoverageType\CoverageTypeCreateRequest;
use App\Http\Requests\CoverageType\CoverageTypeUpdateRequest;
use App\Models\CoverageType;
use Illuminate\Http\Request;

class CoverageTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:CoverageType read')->only(['index']);
            $this->middleware('checkPermission:CoverageType create')->only(['create', 'store']);
            $this->middleware('checkPermission:CoverageType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:CoverageType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.coverage-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.coverage-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoverageTypeCreateRequest $request)
    {
        try {
            CoverageType::add($request->all());
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
            $coverageType = CoverageType::find($id);
            if($coverageType){
                return  view("dashboard.reference-book.coverage-type.edit",compact("coverageType"));
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
    public function update(CoverageTypeUpdateRequest $request, string $id)
    {
        try {
            $coverageType = CoverageType::find($id);
            if($coverageType){
                $coverageType->edit($request->all());
                return redirect()->route("coverage-type.index");
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
