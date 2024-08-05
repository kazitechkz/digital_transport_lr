<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandingType\LandingTypeCreateRequest;
use App\Http\Requests\LandingType\LandingTypeUpdateRequest;
use App\Models\LandingType;
use Illuminate\Http\Request;

class LandingTypeController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:LandingType read')->only(['index']);
            $this->middleware('checkPermission:LandingType create')->only(['create', 'store']);
            $this->middleware('checkPermission:LandingType update')->only(['edit', 'update']);
            $this->middleware('checkPermission:LandingType delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.landing-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.landing-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LandingTypeCreateRequest $request)
    {
        try {
            LandingType::add($request->all());
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
            $landingType = LandingType::find($id);
            if($landingType){
                return  view("dashboard.reference-book.landing-type.edit",compact("landingType"));
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
    public function update(LandingTypeUpdateRequest $request, string $id)
    {
        try {
            $landingType = LandingType::find($id);
            if($landingType){
                $landingType->edit($request->all());
                return redirect()->route("landing-type.index");
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
