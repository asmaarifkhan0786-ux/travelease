<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('admin.packages.index');
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package form submitted successfully.');
    }

    public function show(string $id)
    {
        return redirect()->route('admin.packages.index');
    }

    public function edit(string $id)
    {
        return redirect()->route('admin.packages.index');
    }

    public function update(Request $request, string $id)
    {
        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package updated successfully.');
    }

    public function destroy(string $id)
    {
        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package deleted successfully.');
    }
}