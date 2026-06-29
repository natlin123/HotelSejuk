<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'nama' => 'Administrator',
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]
        );

        User::firstOrCreate(
            ['username' => 'resepsionis'],
            [
                'nama' => 'Resepsionis Hotel',
                'password' => Hash::make('123456'),
                'role' => 'resepsionis',
            ]
        );
    }
}
