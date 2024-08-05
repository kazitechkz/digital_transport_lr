<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\Side\SideCreateRequest;
use App\Http\Requests\Side\SideUpdateRequest;
use App\Models\Side;
use Illuminate\Http\Request;

class SideController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:Side read')->only(['index']);
            $this->middleware('checkPermission:Side create')->only(['create', 'store']);
            $this->middleware('checkPermission:Side update')->only(['edit', 'update']);
            $this->middleware('checkPermission:Side delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.side.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.side.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SideCreateRequest $request)
    {
        try {
            Side::add($request->all());
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
            $side = Side::find($id);
            if($side){
                return  view("dashboard.reference-book.side.edit",compact("side"));
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
    public function update(SideUpdateRequest $request, string $id)
    {
        try {
            $side = Side::find($id);
            if($side){
                $side->edit($request->all());
                return redirect()->route("side.index");
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
