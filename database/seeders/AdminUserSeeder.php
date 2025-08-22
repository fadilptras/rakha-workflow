<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // <-- Import model User
use Illuminate\Support\Facades\Hash; // <-- Import Hash

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@rakha.com',
            'password' => Hash::make('password123'), // Ganti dengan password yang aman
            'role' => 'admin', // Tetapkan sebagai admin
        ]);
    }
}