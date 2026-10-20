<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_name' => ['required', 'string', 'max:100'],
            'contact_email' => ['required', 'email', 'max:255'],
            'currency' => ['required', 'in:PKR,USD,GBP,EUR'],
        ]);

        session(['travel_settings' => $validated]);

        return redirect()
            ->route('admin.settings')
            ->with('success', 'Settings saved successfully.');
    }
}