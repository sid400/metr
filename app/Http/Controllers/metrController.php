<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class metrController extends Controller
{
    public function index()
    {
        return view('metr');
    }
}
