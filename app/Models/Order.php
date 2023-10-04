<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'product',
        // Tambahkan atribut lain yang Anda perlukan di sini
    ];

}
