<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class showroom extends Model
{
    use HasFactory;

    protected $table = "showroom_mobil";
    protected $fillable =[
        'nama_mobil',
        'brand_mobil',
        'warna_mobil',
        'tipe_mobil',
        'harga_mobil',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
