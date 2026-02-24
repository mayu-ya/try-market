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

    public function store(Request $request)
    {
        $profile = $request->only(['profile_img', 'name', 'post_code', 'address', 'building']);
        Profile::create($profile);
        return redirect('/mypage');
    }
}
