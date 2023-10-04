<?php

namespace App\Http\Controllers;

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'product' => 'required|string|max:255',
        ]);

        // Simpan pemesanan ke dalam database
        Order::create($validatedData);

        return redirect()->route('orders.create')->with('success', 'Pemesanan berhasil!');
    }
}
