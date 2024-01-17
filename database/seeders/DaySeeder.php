<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data contoh untuk hari ke-1 hingga hari ke-30
        $data = [];
        for ($i = 1; $i <= 30; $i++) {
            $data[] = ['nama_hari' => "Hari Ke-$i"];
        }

        // Masukkan data ke dalam tabel hari
        DB::table('days')->insert($data);
    }
}
