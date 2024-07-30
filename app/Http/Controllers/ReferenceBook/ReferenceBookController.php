<?php

namespace App\Http\Controllers\ReferenceBook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferenceBookController extends Controller
{
    public function index()
    {
        return view("reference-book.index");
    }
}
