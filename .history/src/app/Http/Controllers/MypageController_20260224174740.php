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

    public function upsert(Request $request)
    {
        $profile = Profile::driver($provider)->profile();
        $profile = Profile::updateOrCreate(
            ['profile_id' => $profile->getId()],
            [
                'name' => $profile->getName(),
                'post_code' => $profile->getPost_code(),
                'address' => $profile->getAddress(),
                'building' => $profile->getBuilding()
            ]
        );
    }
}
