<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;

class MypageController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function upsert(ProfileRequest $request)
    {
        $profile = $request->only(['profile_img', 'name', 'post_code', 'address', 'building']);
        $profile = Profile::updateOrCreate(
            ['profile_id' => $request->Id],
            [
                'profile_img' => $profile['profile_img'],
                'name' => $profile['name'],
                'post_code' => $profile['post_code'],
                'address' => $profile['address'],
                'building' => $profile['building'],
            ]
        );
    }
}
