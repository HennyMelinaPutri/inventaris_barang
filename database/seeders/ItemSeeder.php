<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'id_barang'=>'01',
            'nama_barang'=>'Kursi',
            'bahan'=>'Kayu',
            'kondisi'=>'Baru',
            'jumlah'=>'50',
            'supplier'=>'Wood Mebel',
        ]);
    }
}
