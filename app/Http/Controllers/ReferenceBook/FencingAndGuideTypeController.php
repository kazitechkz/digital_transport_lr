<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\FencingAndGuideType\FencingAndGuideTypeCreateRequest;
use App\Http\Requests\FencingAndGuideType\FencingAndGuideTypeUpdateRequest;
use App\Models\FencingAndGuideType;
use Illuminate\Http\Request;

class FencingAndGuideTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:FencingAndGuideType read')->only(['index']);
            $this->middleware('checkPermission:FencingAndGuideType create')->only(['create', 'store']);
            $this->middleware('checkPermission:FencingAndGuideType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:FencingAndGuideType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.fencing-and-guide-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.fencing-and-guide-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FencingAndGuideTypeCreateRequest $request)
    {
        try {
            FencingAndGuideType::add($request->all());
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
            $fencingAndGuideType = FencingAndGuideType::find($id);
            if($fencingAndGuideType){
                return  view("dashboard.reference-book.fencing-and-guide-type.edit",compact("fencingAndGuideType"));
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
    public function update(FencingAndGuideTypeUpdateRequest $request, string $id)
    {
        try {
            $fencingAndGuideType = FencingAndGuideType::find($id);
            if($fencingAndGuideType){
                $fencingAndGuideType->edit($request->all());
                return redirect()->route("fencing-and-guide-type.index");
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
