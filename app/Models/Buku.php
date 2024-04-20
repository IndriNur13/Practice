<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_buku',
        'penulis',
        'penerbit_id',
        'tahun_terbit',
        'status',
        'pictures',
        'kategori_buku'
    ];

    protected $table = 'bukus';
}
