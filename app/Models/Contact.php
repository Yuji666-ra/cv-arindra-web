<?php

// Contact.php (Model)

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'message',
        // tambahkan nama kolom yang ingin diisi di sini
    ];
}

