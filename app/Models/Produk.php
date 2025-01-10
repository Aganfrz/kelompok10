<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok_minimal',
    ];

    public function cabangStoks()
    {
        return $this->hasMany(CabangStok::class);
    }

    public function pengadaanStoks()
    {
        return $this->hasMany(PengadaanStok::class);
    }

    public function index()
{
    // Ambil semua produk dari database
    $produks = Produk::all(); // Pastikan data produk diambil dengan benar

    // Kirimkan data produk ke view 'home'
    return view('home', compact('produks'));
    
    // pastikan nama view sesuai dengan nama file Blade
}
}

