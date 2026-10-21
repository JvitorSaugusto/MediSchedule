<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name'     => 'Administrador do Sistema',
            'email'    => 'admin@medischedule.test',
            'password' => Hash::make('senha123'),
            'cpf'      => '00000000000',
            'phone'    => '11999998888',
            'role'     => 'admin',
        ]);


        $pacientes = [
            [
                'name'     => 'João Silva',
                'email'    => 'joao.silva@email.com',
                'password' => Hash::make('senha123'),
                'cpf'      => '11111111111',
                'phone'    => '11977776666',
                'role'     => 'patient',
            ],
            [
                'name'     => 'Maria Oliveira',
                'email'    => 'maria.oliveira@email.com',
                'password' => Hash::make('senha123'),
                'cpf'      => '22222222222',
                'phone'    => '11966665555',
                'role'     => 'patient',
            ],
            [
                'name'     => 'Carlos Eduardo',
                'email'    => 'carlos.edu@email.com',
                'password' => Hash::make('senha123'),
                'cpf'      => '33333333333',
                'phone'    => '11955554444',
                'role'     => 'patient',
            ],
            [
                'name'     => 'Ana Beatriz',
                'email'    => 'ana.beatriz@email.com',
                'password' => Hash::make('senha123'),
                'cpf'      => '44444444444',
                'phone'    => '11944443333',
                'role'     => 'patient',
            ],
        ];


        foreach ($pacientes as $paciente) {
            User::create($paciente);
        }
        
        User::factory()->create([ 
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
