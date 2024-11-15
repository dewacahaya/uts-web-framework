<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table("barangs")->insert([
        //     'kode' => 'B001',
        //     'name' => 'Buku Tulis',
        //     'harga' => '5500',
        //     'is_aktif' => '1',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Barang::create([
        //     'kode' => 'B002',
        //     'name' => 'Pensil',
        //     'harga' => '3000',
        //     'is_aktif' => '1',
        // ]);

        // MEMBUAT DATA DUMMY BARANG MENGGUNAKAN FACTORY BARANG
        Barang::factory()->count(10)->create();
    }
}
