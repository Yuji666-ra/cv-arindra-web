<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'integer|max:15',
            'service' => 'required',
            'packet' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('orders.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan pemesanan ke dalam database
        Order::create($validator);

        return redirect()->route('orders.create')->with('success', 'Pemesanan berhasil!');
    }
}
