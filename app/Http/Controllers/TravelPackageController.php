<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    public function index()
    {
        return view('packages.index');
    }
}