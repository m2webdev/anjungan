<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($title)
    {
        $profile = Profile::where('title', $title)->first();
        if (!$profile)
            abort(404);
        return response()->view('profile.show', [
            'profile' => $profile,
            'profiles' => Profile::latest()->get(),
            'commentParam' => ['type' => 'profile']
        ]);
    }
}
