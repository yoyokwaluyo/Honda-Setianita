<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurBusinessController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.business.index');
    }

}
