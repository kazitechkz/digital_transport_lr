<?php

namespace App\Http\Controllers\Statement;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublicStopsOnTheHighway\PublicStopsOnTheHighwayCreateRequest;
use App\Http\Requests\PublicStopsOnTheHighway\PublicStopsOnTheHighwayUpdateRequest;
use App\Models\PublicStopsOnTheHighway;
use Illuminate\Http\Request;

class PublicStopsOnTheHighwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('dashboard.statement.public-stops-on-the-highway.index');
        } catch (\Exception $exception){
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
            return view('dashboard.statement.public-stops-on-the-highway.create');
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicStopsOnTheHighwayCreateRequest $request)
    {
        try {
            $input = $request->all();
            $input['have_route'] = $request->has('have_route') ? 1 : 0;
            PublicStopsOnTheHighway::add($input);
            return redirect(route('public-stops-on-the-highway.index'));
        } catch (\Exception $exception){
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
            $model = PublicStopsOnTheHighway::findOrFail($id);
            return view('dashboard.statement.public-stops-on-the-highway.edit', compact('model'));
        } catch (\Exception $exception){
            toastr()->error($exception->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicStopsOnTheHighwayUpdateRequest $request, string $id)
    {
        try {
            $model = PublicStopsOnTheHighway::findOrFail($id);
            $input = $request->all();
            $input['have_route'] = $request->has('have_route') ? 1 : 0;
            $model->edit($input);
            return redirect(route('public-stops-on-the-highway.index'));
        } catch (\Exception $exception){
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
