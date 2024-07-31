<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\SideStoneStamp\SideStoneStampCreateRequest;
use App\Http\Requests\SideStoneStamp\SideStoneStampUpdateRequest;
use App\Models\SideStoneStamp;
use Illuminate\Http\Request;

class SideStoneStampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.side-stone-stamp.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.side-stone-stamp.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SideStoneStampCreateRequest $request)
    {
        try {
            SideStoneStamp::add($request->all());
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
            $sideStoneStamp = SideStoneStamp::find($id);
            if($sideStoneStamp){
                return  view("dashboard.reference-book.side-stone-stamp.edit",compact("sideStoneStamp"));
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
    public function update(SideStoneStampUpdateRequest $request, string $id)
    {
        try {
            $sideStoneStamp = SideStoneStamp::find($id);
            if($sideStoneStamp){
                $sideStoneStamp->edit($request->all());
                return redirect()->route("side-stone-stamp.index");
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
