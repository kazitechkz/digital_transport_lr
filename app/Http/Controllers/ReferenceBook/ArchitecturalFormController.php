<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArchitecturalForm\ArchitecturalFormCreateRequest;
use App\Http\Requests\ArchitecturalForm\ArchitecturalFormUpdateRequest;
use App\Models\ArchitecturalForm;
use Illuminate\Http\Request;

class ArchitecturalFormController extends Controller
{
    public function __construct()
    {
        {
            $this->middleware('checkPermission:ArchitecturalForm read')->only(['index']);
            $this->middleware('checkPermission:ArchitecturalForm create')->only(['create', 'store']);
            $this->middleware('checkPermission:ArchitecturalForm update')->only(['edit', 'update']);
            $this->middleware('checkPermission:ArchitecturalForm delete')->only('destroy');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.reference-book.architectural-form.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.reference-book.architectural-form.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArchitecturalFormCreateRequest $request)
    {
        try {
            ArchitecturalForm::add($request->all());
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
            $architecturalForm = ArchitecturalForm::find($id);
            if($architecturalForm){
                return  view("dashboard.reference-book.architectural-form.edit",compact("architecturalForm"));
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
    public function update(ArchitecturalFormUpdateRequest $request, string $id)
    {
        try {
            $architecturalForm = ArchitecturalForm::find($id);
            if($architecturalForm){
                $architecturalForm->edit($request->all());
                return redirect()->route("architectural-form.index");
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
