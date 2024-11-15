<?php

namespace Database\Seeders;


use App\Models\Pelanggan2301010032;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // MEMBUAT DATA DUMMY BARANG MENGGUNAKAN FACTORY BARANG
        Pelanggan2301010032::factory()->count(10)->create();
    }
}
