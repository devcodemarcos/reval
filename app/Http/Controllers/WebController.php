<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function inicio(Request $request)
    {
        return view('web.layout');
    }

    public function contact(Request $request)
    {
        return view('web.sections.contact');
    }

    public function services(Request $request)
    {
        return view('web.sections.services');
    }
}
