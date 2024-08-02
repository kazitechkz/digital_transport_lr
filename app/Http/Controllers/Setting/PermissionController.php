<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $permissions = Permission::all();
            return view('dashboard.setting.permission.index', compact('permissions'));
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
            return view('dashboard.setting.permission.create');
        } catch (\Exception $exception){
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
            $this->validate($request, ['name' => 'required|regex:/^[a-zA-Z]+(-[a-zA-Z]+)*$/']);
            if ($request->get('crud')) {
                Permission::create(['name' => $request['name']. ' create']);
                Permission::create(['name' => $request['name']. ' read']);
                Permission::create(['name' => $request['name']. ' update']);
                Permission::create(['name' => $request['name']. ' delete']);
            } else {
                Permission::create(['name' => $request['name']. ' management']);
            }
            return redirect(route('permission.index'));
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
            $permission = Permission::findOrFail($id);
            return view('dashboard.setting.permission.edit', compact('permission'));
        } catch (\Exception $exception){
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
            $permission = Permission::findOrFail($id);
            $this->validate($request, ['name' => 'required']);
            $permission->name = $request['name'];
            $permission->save();
            return redirect(route('permission.index'));
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
