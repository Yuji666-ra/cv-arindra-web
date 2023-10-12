<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Kernel;
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

    public function careers(){
        return view('careers');
    }

    public function contact(){
        return view('contact');
    }

    public function admin(){

        return view('admin/admin');
    }

    public function login(){
        return view('auth/login');
    }



}
