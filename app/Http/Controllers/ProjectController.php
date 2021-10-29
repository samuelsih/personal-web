<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function dummyCoffee()
    {
        return view('projects.dummy-coffee');
    }

    public function findDosen()
    {
        return view('projects.find-dosen');
    }
}
