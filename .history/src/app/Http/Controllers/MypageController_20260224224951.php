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
            ['profile_id' => $profile->getId()],
            [
                'profile_img' => $profile->getProfile_img(),
                'name' => $profile->getName(),
                'post_code' => $profile->getPost_code(),
                'address' => $profile->getAddress(),
                'building' => $profile->getBuilding()
            ]
        );
    }
}
