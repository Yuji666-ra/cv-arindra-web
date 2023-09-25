<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function tutorial(){
        return view('footer/tutorial');
    }

    public function premiere(){
        return view('footer/premiere');
    }

    public function final(){
        return view('footer/final');
    }

    public function after(){
        return view('footer/after');
    }

    public function davinci(){
        return view('footer/davinci');
    }

    public function lightroom(){
        return view('footer/lightroom');
    }

    public function photoshop(){
        return view('footer/photoshop');
    }

    public function master(){
        return view('footer/master');
    }
}
