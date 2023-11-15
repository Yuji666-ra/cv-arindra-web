<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function create()
    {
        return view('careers.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'required|string|max:1000',
        ]);

        // Simpan file resume ke dalam storage
        $resumePath = $request->file('resume')->store('resumes'); // Simpan file di dalam folder 'storage/app/resumes'

        // Dapatkan URL file resume setelah disimpan
        $filePath = 'resumes/' . $resumePath;
        $url = Storage::url($filePath);

        // Simpan data aplikasi pekerjaan ke dalam database menggunakan model Career
        $careerApplication = new Careers();
        $careerApplication->name = $validatedData['name'];
        $careerApplication->email = $validatedData['email'];
        $careerApplication->resume_path = $url; // Simpan URL file resume
        $careerApplication->cover_letter = $validatedData['cover_letter'];
        $careerApplication->save();

        // Redirect dengan pesan sukses setelah menyimpan data
        return redirect('/careers')->with('success', 'Application submitted successfully!');
    }
}
