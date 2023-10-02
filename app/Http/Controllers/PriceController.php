<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function company(){
        return view('price/company');
    }

    public function video(){
        return view('price/video');
    }

    public function photo(){
        return view('price/photo');
    }

    public function drone(){
        return view('price/drone');
    }
}
