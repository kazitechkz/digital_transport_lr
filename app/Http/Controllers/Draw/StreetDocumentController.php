<?php

namespace App\Http\Controllers\Draw;

use App\Http\Controllers\Controller;
use App\Http\Requests\StreetDocument\StreetDocumentCreateRequest;
use App\Models\StreetDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class StreetDocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkPermission:StreetDocument read')->only(['index']);
        $this->middleware('checkPermission:StreetDocument create')->only(['create', 'store']);
        $this->middleware('checkPermission:StreetDocument update')->only(['edit', 'update']);
        $this->middleware('checkPermission:StreetDocument delete')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.draw.street-document.index');
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
            return view('dashboard.draw.street-document.create');
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
            $doc = StreetDocument::add($request->all());
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
        try {
            $model = StreetDocument::with('file', 'document_type')->findOrFail($id);
            $path = 'https://wicked-carpets-notice.loca.lt' . $model->file->getFile('url');
            if ($model->document_type->extension == 'dwg') {
                return view('dashboard.draw.street-document.dwg', compact('path'));
            }
            return view('dashboard.draw.street-document.google', compact('path'));

        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $model = StreetDocument::findOrFail($id);
            return view('dashboard.draw.street-document.edit', compact('model'));
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
