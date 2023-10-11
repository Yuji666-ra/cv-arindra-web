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
        'telp' => 'string',
        'service' => 'string', // Sesuaikan validasi ini dengan aturan validasi yang sesuai
        'packet' => 'string', // Sesuaikan validasi ini dengan aturan validasi yang sesuai
    ]);

    if ($validator->fails()) {
        return redirect()->route('orders.create')
            ->withErrors($validator)
            ->withInput();
    }

    // Simpan pemesanan ke dalam database
    Order::create($request->all());

    return redirect()->route('orders.create')->with('success', 'Pemesanan berhasil!');
}

}
