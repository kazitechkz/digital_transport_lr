<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeTrafficLight\TypeTrafficLightCreateRequest;
use App\Http\Requests\TypeTrafficLight\TypeTrafficLightUpdateRequest;
use App\Models\TypeTrafficLight;
use Illuminate\Http\Request;

class TypeTrafficLightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.type-traffic-light.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.type-traffic-light.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeTrafficLightCreateRequest $request)
    {
        try {
            TypeTrafficLight::add($request->all());
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
            $typeTrafficLight = TypeTrafficLight::find($id);
            if($typeTrafficLight){
                return  view("dashboard.reference-book.type-traffic-light.edit",compact("typeTrafficLight"));
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
    public function update(TypeTrafficLightUpdateRequest $request, string $id)
    {
        try {
            $typeTrafficLight = TypeTrafficLight::find($id);
            if($typeTrafficLight){
                $typeTrafficLight->edit($request->all());
                return redirect()->route("type-traffic-light.index");
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
