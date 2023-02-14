<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function filter()
    {
        return view('frontend.pages.filter');
    }
    public function detail()
    {
        return view('frontend.pages.detail');
    }
}
