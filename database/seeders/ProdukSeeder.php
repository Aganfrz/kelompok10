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
                'nama' => 'Nescafe Gold',
                'deskripsi' => 'Kopi nescafe',
                'harga' => 10000.00,                 
            ],
            [
                'nama' => 'Arabika',
                'deskripsi' => 'Kopi arabika',
                'harga' => 20000.00,                
            ],
            [
                'nama' => 'Robusta',
                'deskripsi' => 'Kopi robusta',
                'harga' => 30000.00,                
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}
