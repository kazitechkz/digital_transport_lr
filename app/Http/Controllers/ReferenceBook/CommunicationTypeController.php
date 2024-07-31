<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommunicationType\CommunicationTypeCreateRequest;
use App\Http\Requests\CommunicationType\CommunicationTypeUpdateRequest;
use App\Models\CommunicationType;
use Illuminate\Http\Request;

class CommunicationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.communication-type.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.communication-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommunicationTypeCreateRequest $request)
    {
        try {
            CommunicationType::add($request->all());
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
            $communicationType = CommunicationType::find($id);
            if($communicationType){
                return  view("dashboard.reference-book.communication-type.edit",compact("communicationType"));
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
    public function update(CommunicationTypeUpdateRequest $request, string $id)
    {
        try {
            $CommunicationType = CommunicationType::find($id);
            if($CommunicationType){
                $CommunicationType->edit($request->all());
                return redirect()->route("communication-type.index");
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
