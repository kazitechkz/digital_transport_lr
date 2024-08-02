<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.setting.index');
    }
}
