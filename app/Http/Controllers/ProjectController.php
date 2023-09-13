<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function dbl(){
        return view('projects/dbl');
    }

    public function camp(){
        return view('projects/camp');
    }

    public function esport(){
        return view('projects/esport');
    }

    public function project(){
        return view('projects/project');
    }
}
