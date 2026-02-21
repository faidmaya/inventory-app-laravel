<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class UserProfileController extends Controller
{
    public function edit()
    {
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'age' => 'nullable|integer|min:1',
            'biodata' => 'nullable|string',
        ]);

        Profile::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'age' => $request->age,
                'biodata' => $request->biodata,
            ]
        );

        return back()->with('success', 'Profile berhasil diperbarui');
    }
}