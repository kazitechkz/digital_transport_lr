<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\SideStoneType\SideStoneTypeCreateRequest;
use App\Http\Requests\SideStoneType\SideStoneTypeUpdateRequest;
use App\Models\SideStoneType;
use Illuminate\Http\Request;

class SideStoneTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:SideStoneType read')->only(['index']);
            $this->middleware('checkPermission:SideStoneType create')->only(['create', 'store']);
            $this->middleware('checkPermission:SideStoneType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:SideStoneType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.side-stone-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.side-stone-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SideStoneTypeCreateRequest $request)
    {
        try {
            SideStoneType::add($request->all());
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
            $sideStoneType = SideStoneType::find($id);
            if($sideStoneType){
                return  view("dashboard.reference-book.side-stone-type.edit",compact("sideStoneType"));
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
    public function update(SideStoneTypeUpdateRequest $request, string $id)
    {
        try {
            $sideStoneType = SideStoneType::find($id);
            if($sideStoneType){
                $sideStoneType->edit($request->all());
                return redirect()->route("side-stone-type.index");
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
