<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\LightingSupportType\LightingSupportTypeCreateRequest;
use App\Http\Requests\LightingSupportType\LightingSupportTypeUpdateRequest;
use App\Models\LightingSupportType;
use Illuminate\Http\Request;

class LightingSupportTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:LightingSupportType read')->only(['index']);
            $this->middleware('checkPermission:LightingSupportType create')->only(['create', 'store']);
            $this->middleware('checkPermission:LightingSupportType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:LightingSupportType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.lighting-support-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.lighting-support-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LightingSupportTypeCreateRequest $request)
    {
        try {
            LightingSupportType::add($request->all());
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
            $lightingSupportType = LightingSupportType::find($id);
            if($lightingSupportType){
                return  view("dashboard.reference-book.lighting-support-type.edit",compact("lightingSupportType"));
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
    public function update(LightingSupportTypeUpdateRequest $request, string $id)
    {
        try {
            $lightingSupportType = LightingSupportType::find($id);
            if($lightingSupportType){
                $lightingSupportType->edit($request->all());
                return redirect()->route("lighting-support-type.index");
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
