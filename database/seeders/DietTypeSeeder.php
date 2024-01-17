<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed diet types
        $dietTypes = [
            ['deskripsi' => 'Diet Standar',],
            ['deskripsi' => 'Diet Vegetarian',],
            ['deskripsi' => 'Diet Mayo',],
            ['deskripsi' => 'Diet Metabolisme',],
            ['deskripsi' => 'Diet Mediterania',]
        ];

        // create
        foreach ($dietTypes as $dietType) {
            DB::table('diet_types')->insert($dietType);
        }

    }
}
