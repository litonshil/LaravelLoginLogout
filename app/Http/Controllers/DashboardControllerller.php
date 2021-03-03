<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControllerller extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
