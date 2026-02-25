<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;

class MypageController extends Controller
{
    public function index()
    {
        $profiles = new Profile()::only(['profile_img', 'name', 'post_code', 'address', 'building']);
        return view('profile', ['profiles' => $profiles]);
    }

    public function upsert(ProfileRequest $request)
    {
        $profile = $request->only(['profile_img', 'name', 'post_code', 'address', 'building']);
        $profile = Profile::updateOrCreate(
            ['user_id' => auth()->Id()],
            [
                'user_id' => auth()->id(),
                'profile_img' => $profile['profile_img'],
                'name' => $profile['name'],
                'post_code' => $profile['post_code'],
                'address' => $profile['address'],
                'building' => $profile['building'],
            ]
        );

        return redirect('mypage');
    }
}
