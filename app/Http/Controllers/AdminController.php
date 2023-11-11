<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Http\Kernel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function user()
    {

        $data = User::get();

        return view('admin/admin_user',compact('data'));
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

    public function buat(){

        return view('admin/user_buat');
    }

    public function delete(Request $request,$id ){
        $data = Order::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('admin.admin/admin_pesanan');
    }

    public function hapus(Request $request,$id ){
        $data = User::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('admin.admin/admin_user');
    }
}
