<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Kepala User',
            'email' => 'kepala@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'kepala',
        ]);
        User::create([
            'name' => 'Petugas User',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'petugas',
        ]);
        User::create([
            'name' => 'Perawat User',
            'email' => 'perawat@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'perawat',
        ]);
    }
}
