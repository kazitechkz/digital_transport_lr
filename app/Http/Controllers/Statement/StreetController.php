<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Street\StreetCreateRequest;
use App\Http\Requests\Street\StreetUpdateRequest;
use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
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
            $input = $request->all();
            $input["is_active"] = $request->boolean("is_active");
            Street::add($input);
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
            $street = Street::find($id);
            if($street){
                $input["is_active"] = $request->boolean("is_active");
                $street->edit($input);
                return redirect()->route("street.index");
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
