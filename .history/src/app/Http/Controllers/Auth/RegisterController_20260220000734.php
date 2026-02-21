<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function redirectPath()
    {
        return '/mypage/profile';
    }
}
