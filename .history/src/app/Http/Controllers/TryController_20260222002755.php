<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class TryController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::select('image', 'merchandise_name')->get();
        dd($merchandises);
        return view('index', ['merchandises' => $merchandises]);
    }
}
