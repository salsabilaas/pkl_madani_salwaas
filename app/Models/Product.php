<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $guarded = 'id';
    protected $attributes = [
        'judul',
        'deskripsi',
        'gambar',
        'harga',
        'stok'
    ];

     protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'harga',
        'stok'
    ];
}
