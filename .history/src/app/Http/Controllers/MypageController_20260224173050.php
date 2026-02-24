<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class MypageController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function handleOAuthCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->profile();
        $profile = Profile::updateOrCreate(
            ['profile_id' => $socialUser->getId()],
            [
                'name' => $socialUser->getName(),
                'post_code' => $socialUser->getPost_code(),
                'address' => $socialUser->getAddress(),
                'building' => $socialUser->getBuilding()
            ]
        );
    }
}
