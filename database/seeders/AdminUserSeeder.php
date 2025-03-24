<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin kullanıcısı oluştur
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        
        // Editor kullanıcısı oluştur
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'editor',
        ]);
        
        // Yazar kullanıcısı oluştur
        User::create([
            'name' => 'Author User',
            'email' => 'author@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'author',
        ]);
    }
}
