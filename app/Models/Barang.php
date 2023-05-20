<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'ukuran_s',
        'ukuran_m',
        'ukuran_l',
        'ukuran_xl',
        'deskripsi',
        'foto'
    ];
}
