<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'resume_path', 'cover_letter'
        // Sesuaikan dengan kolom yang ada pada tabel careers di database Anda
    ];
}
