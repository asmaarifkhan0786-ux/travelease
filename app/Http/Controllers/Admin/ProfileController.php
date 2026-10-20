<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile');
    }

    public function update(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('home')
                ->with('error', 'Please log in before updating your profile.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if ($request->hasFile('photo')) {
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            $user->profile_photo_path = $request->file('photo')
                ->store('profile-photos', 'public');
        }

        $user->save();

        return redirect()->route('admin.profile')
            ->with('success', 'Your profile has been updated successfully.');
    }
}