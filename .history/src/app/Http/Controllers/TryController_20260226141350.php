<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class TryController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::select('image', 'merchandise_name')->get();
        return view('index', ['merchandises' => $merchandises]);
    }

    public function search(Request $request)
    {
        $merchandises = Merchandise::with('merchandise_name')->KeywordSearch($request->keyword)->get();

        return view('index', compact('merchandises'));
    }
}
