<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        User::factory()->create([
            'name' => 'Pak Jayusman',
            'email' => 'jayusman@gmail.com',
        ])->assignRole('owner')->givePermissionTo('edit_cabang','edit_user');

        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
        ])->assignRole('manager')
        ->givePermissionTo(['view_transaksi','view_stok']);

        User::factory()->create([
            'name' => 'Supervisor Cabang 1',
            'email' => 'supervisor1@gmail.com',
            'cabang_id' => 1,
        ])->assignRole('supervisor')
        ->givePermissionTo(['view_transaksi']);

        User::factory()->create([
            'name' => 'Kasir Cabang 1',
            'email' => 'kasir1@gmail.com',
            'cabang_id' => 1,
        ])->assignRole('kasir');

        User::factory()->create([
            'name' => 'Supervisor Cabang 2',
            'email' => 'supervisor2@gmail.com',
            'cabang_id' => 2,
        ])->assignRole('supervisor')
        ->givePermissionTo(['view_transaksi']);

        User::factory()->create([
            'name' => 'Kasir Cabang 2',
            'email' => 'kasir2@gmail.com',
            'cabang_id' => 2,
        ])->assignRole('kasir');

        User::factory()->create([
            'name' => 'Supervisor Cabang 3',
            'email' => 'supervisor3@gmail.com',
            'cabang_id' => 3,
        ])->assignRole('supervisor')
        ->givePermissionTo(['view_transaksi']);

        User::factory()->create([
            'name' => 'Kasir Cabang 3',
            'email' => 'kasir3@gmail.com',
            'cabang_id' => 3,
        ])->assignRole('kasir');

        User::factory()->create([
            'name' => 'Supervisor Cabang 4',
            'email' => 'supervisor4@gmail.com',
            'cabang_id' => 4,
        ])->assignRole('supervisor')
        ->givePermissionTo(['view_transaksi']);

        User::factory()->create([
            'name' => 'Kasir Cabang 4',
            'email' => 'kasir4@gmail.com',
            'cabang_id' => 4,
        ])->assignRole('kasir');

        User::factory()->create([
            'name' => 'Supervisor Cabang 5',
            'email' => 'supervisor5@gmail.com',
            'cabang_id' => 5,
        ])->assignRole('supervisor')
        ->givePermissionTo(['view_transaksi']);

        User::factory()->create([
            'name' => 'Kasir Cabang 5',
            'email' => 'kasir5@gmail.com',
            'cabang_id' => 5,
        ])->assignRole('kasir');

        User::factory()->create([
            'name' => 'Pegawai Gudang Cabang 1',
            'email' => 'pegawaigudang1@gmail.com',
            'cabang_id' => 1,
        ])->assignRole('pegawai');

        User::factory()->create([
            'name' => 'Pegawai Gudang Cabang 2',
            'email' => 'pegawaigudang2@gmail.com',
            'cabang_id' => 2,
        ])->assignRole('pegawai');

        User::factory()->create([
            'name' => 'Pegawai Gudang Cabang 3',
            'email' => 'pegawaigudang3@gmail.com',
            'cabang_id' => 3,
        ])->assignRole('pegawai');
        
        User::factory()->create([
            'name' => 'Pegawai Gudang Cabang 4',
            'email' => 'pegawaigudang4@gmail.com',
            'cabang_id' => 4,
        ])->assignRole('pegawai');

        User::factory()->create([
            'name' => 'Pegawai Gudang Cabang 5',
            'email' => 'pegawaigudang5@gmail.com',
            'cabang_id' => 5,
        ])->assignRole('pegawai');
    }
}
