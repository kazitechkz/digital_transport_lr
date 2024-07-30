<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryOfHighway\CategoryOfHighwayCreateRequest;
use App\Http\Requests\CategoryOfHighway\CategoryOfHighwayUpdateRequest;
use App\Models\CategoryOfHighway;
use Illuminate\Http\Request;

class CategoryOfHighwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.category-of-highway.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.category-of-highway.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryOfHighwayCreateRequest $request)
    {
        try {
            CategoryOfHighway::add($request->all());
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
            $categoryOfHighway = CategoryOfHighway::find($id);
            if($categoryOfHighway){
                return  view("dashboard.reference-book.category-of-highway.edit",compact("categoryOfHighway"));
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
    public function update(CategoryOfHighwayUpdateRequest $request, string $id)
    {
        try {
            $categoryOfHighway = CategoryOfHighway::find($id);
            if($categoryOfHighway){
                $categoryOfHighway->edit($request->all());
                return redirect()->route("category-of-highway.index");
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
