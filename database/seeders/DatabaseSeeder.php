<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Dzaki', // Ganti dengan nama yang kamu inginkan
            'email' => 'dzaki@admin.com', // Ganti dengan alamat email yang kamu inginkan
            'password' => Hash::make('20052004'), // Ganti 'password123' dengan password yang kamu inginkan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
