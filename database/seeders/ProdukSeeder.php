<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        //
        $produks = [
            [
                'nama' => 'Cheetos',
                'deskripsi' => 'Kripik jagung gurih',
                'harga' => 3000.00,                 
            ],
            [
                'nama' => 'Beng-beng',
                'deskripsi' => 'Snack coklat',
                'harga' => 2000.00,                
            ],
            [
                'nama' => 'Milku',
                'deskripsi' => 'Minuman susu berkualitas',
                'harga' => 3500.00,                
            ],
            [
                'nama' => 'Taro',
                'deskripsi' => 'Snack cemilan mantap, 1 bungkus 10g',
                'harga' => 2000.00,                
            ],
            [
                'nama' => 'Ultra Milk',
                'deskripsi' => 'Minuman susu sehat, 200mil',
                'harga' => 3500.00,                
            ],
            [
                'nama' => 'Sampo Clear',
                'deskripsi' => 'Sampo pembasmi ketombe, 1 renceng',
                'harga' => 6000.00,                
            ],
            [
                'nama' => 'Minyak 1Liter',
                'deskripsi' => 'Minyak berkualitas tinggi',
                'harga' => 19000.00,                
            ],
            [
                'nama' => 'Buah Anggur',
                'deskripsi' => 'Anggur muscat tanpa biji, 1Kg',
                'harga' => 45000.00,                
            ],
            [
                'nama' => 'Buah Mangga',
                'deskripsi' => 'Mangga arum manis, 1kg',
                'harga' => 22000.00,                
            ],
            [
                'nama' => 'Roti',
                'deskripsi' => 'Roti keju, satuan',
                'harga' => 4000.00,                 
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}
