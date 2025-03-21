<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('dashboard', compact('properties'));
    }
}
