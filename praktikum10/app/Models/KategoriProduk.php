<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // Tabel kategori
    protected $table = 'kategori_produk';

    // bikin kolom yg bisa diisi
    protected $fillable = [
        'nama',
    ];

    // bikin fungsi produk untuk relasi has  many
    public function produk() {
        return $this->belongsTo(kategoriproduk::class); 
    }

    
}
