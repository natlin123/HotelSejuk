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
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('123456'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'resepsionis@gmail.com'],
            [
                'name' => 'Resepsionis Hotel',
                'password' => Hash::make('resepsionis123'),
            ]
        );
    }
}
