<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Kernel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function user()
    {
        return view('admin/admin_user');
    }
    public function pesanan()
    {
        $data = Order::get();

        return view('admin/admin_pesanan',compact('data'));
    }

    public function edit(Request $request,$id)
    {
        $data = Order::find($id);

        dd($data);
    }


}
