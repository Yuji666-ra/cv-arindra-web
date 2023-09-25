<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function tutorial(){
        return view('footer/tutorial');
    }
}
