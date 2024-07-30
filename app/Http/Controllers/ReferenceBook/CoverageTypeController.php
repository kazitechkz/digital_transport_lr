<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoverageType\CoverageTypeCreateRequest;
use App\Models\CoverageType;
use Illuminate\Http\Request;

class CoverageTypeController extends Controller
{
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
