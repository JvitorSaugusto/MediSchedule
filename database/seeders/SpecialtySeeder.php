<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialty')->insert([
            [
                'name' => 'Cardiologia',
            ],
            [
                'name' => 'Dermatologia',
            ],
            [
                'name' => 'Ortopedia',
            ],
            [
                'name' => 'Pediatria',
            ],
            [
                'name' => 'Ginecologia',
            ],
        ]);
    }
}
