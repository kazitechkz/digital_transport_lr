<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Street\StreetCreateRequest;
use App\Http\Requests\Street\StreetUpdateRequest;
use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:Street read')->only(['index']);
            $this->middleware('checkPermission:Street create')->only(['create', 'store']);
            $this->middleware('checkPermission:Street update')->only(['edit', 'update']);
            $this->middleware('checkPermission:Street delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.statement.street.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.statement.street.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StreetCreateRequest $request)
    {
        try {
            Street::addWithBoolean($request->all(), $request);
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
            $street = Street::find($id);
            if($street){
                return  view("dashboard.statement.street.edit",compact("street"));
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
    public function update(StreetUpdateRequest $request, string $id)
    {
        try {
            $street = Street::findOrFail($id);
            $street->editWithBoolean($request->all(), $request);
            return redirect()->route("street.index");
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
