<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrawDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.draw.index');
    }
}
