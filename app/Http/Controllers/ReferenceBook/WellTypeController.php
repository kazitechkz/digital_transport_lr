<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\WellsType\WellsTypeCreateRequest;
use App\Http\Requests\WellsType\WellsTypeUpdateRequest;
use App\Models\WellsType;
use Illuminate\Http\Request;

class WellTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:WellType read')->only(['index']);
            $this->middleware('checkPermission:WellType create')->only(['create', 'store']);
            $this->middleware('checkPermission:WellType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:WellType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.well-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.well-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WellsTypeCreateRequest $request)
    {
        try {
            WellsType::add($request->all());
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
            $wellType = WellsType::find($id);
            if($wellType){
                return  view("dashboard.reference-book.well-type.edit",compact("wellType"));
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
    public function update(WellsTypeUpdateRequest $request, string $id)
    {
        try {
            $wellType = WellsType::find($id);
            if($wellType){
                $wellType->edit($request->all());
                return redirect()->route("well-type.index");
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
