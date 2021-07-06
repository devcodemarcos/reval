<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function inicio(Request $request)
    {
        return view('web.layout');
    }
}
