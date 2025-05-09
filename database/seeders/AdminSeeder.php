<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::updateOrCreate(
            ['email' => 'admin@spa.com'],
            [
                'name' => 'Admin Spa',
                'password' => Hash::make('admin123'), // Cambia esto en producción
                'role' => 'admin',
                'telefono' => '123456789'
            ]
        );
    }
}

