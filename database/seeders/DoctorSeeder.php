<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('doctors')->insert([
            [
                'specialty_id'    => 1,
                'name'            => 'Dr. Roberto Carlos',
                'crm'             => '12345-SP',
                'phone'           => '11999998888',
                'work_start_time' => '08:00:00',
                'work_end_time'   => '17:00:00',
                'slot_duration'   => 30,
                'is_active'       => true,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
            [
                'specialty_id'    => 2,
                'name'            => 'Dra. Ana Silva',
                'crm'             => '54321-RJ',
                'phone'           => '21988887777',
                'work_start_time' => '09:00:00',
                'work_end_time'   => '18:00:00',
                'slot_duration'   => 20,
                'is_active'       => true,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
            [
                'specialty_id'    => 3,
                'name'            => 'Dr. Marcos Paulo',
                'crm'             => '98765-MG',
                'phone'           => '31977776666',
                'work_start_time' => '07:00:00',
                'work_end_time'   => '13:00:00',
                'slot_duration'   => 40,
                'is_active'       => true,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
            [
                'specialty_id'    => 4,
                'name'            => 'Dra. Juliana Costa',
                'crm'             => '45678-SP',
                'phone'           => '11966665555',
                'work_start_time' => '10:00:00',
                'work_end_time'   => '19:00:00',
                'slot_duration'   => 30,
                'is_active'       => false,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
        ]);
    }
}