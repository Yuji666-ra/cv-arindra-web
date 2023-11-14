<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Pastikan menggunakan namespace yang sesuai dengan model Contact

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        try {
            // Simpan data pesan kontak ke database
            Contact::create($validatedData);

            // Setelah berhasil disimpan, tampilkan notifikasi
            return redirect('/contact')->with('success', 'Pesan telah terkirim!');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat penyimpanan ke database, tampilkan pesan kesalahan
            return redirect('/contact')->with('error', 'Terjadi kesalahan!');
        }
    }
}
