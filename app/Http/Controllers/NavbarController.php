<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function projects()
    {
        return view('projects');
    }

    public function about()
    {
        return view('about');
    }
}
