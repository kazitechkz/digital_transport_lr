<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkPermission:DocumentType read')->only(['index']);
        $this->middleware('checkPermission:DocumentType create')->only(['create', 'store']);
        $this->middleware('checkPermission:DocumentType update')->only(['edit', 'update']);
        $this->middleware('checkPermission:DocumentType delete')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.setting.document-type.index');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('dashboard.setting.document-type.create');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, ['title' => 'required', 'extension' => 'required']);
            DocumentType::add($request->all());
            return redirect(route('document-type.index'));
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage(),"Error");
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
            $model = DocumentType::findOrFail($id);
            return view('dashboard.setting.document-type.edit', compact('model'));
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->validate($request, ['title' => 'required', 'extension' => 'required']);
            $model = DocumentType::findOrFail($id);
            $model->edit($request->all());
            return redirect(route('document-type.index'));
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage(),"Error");
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
