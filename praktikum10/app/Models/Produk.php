<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;


    // Hubungin dengan produk
    protected $table = 'produk';

    // Matiin timestamps
    public $timestamps = false;

    //Kolom-kolom yang bisa diisi
    protected $fillable = [
        'kode',             // Kode produk
        'nama',             // Nama produk
        'harga_jual',       // Harga jual produk
        'harga_beli',       // Harga beli produk
        'stok',             // Jumlah stok produk
        'min_stok',         // Jumlah minimal stok produk
        'deskripsi',        // Deskripsi produk
        'kategori_produk_id', // ID kategori produk
    ];

    // Kasih relaksi ke kategoriproduk
    public function kategori_produk()
    {
        return $this->belongsTo(kategoriproduk::class);
    }
}
