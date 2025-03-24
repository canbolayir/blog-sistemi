<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Kategoriler ve etiketler önce oluşturulmalı
        $this->call([
            // Admin kullanıcıları
            AdminUserSeeder::class,
            // Sonra kategoriler ve etiketler
            CategorySeeder::class,
            TagSeeder::class,
            // Sonra yazılar ve sayfalar
            PostSeeder::class,
            PageSeeder::class,
        ]);
    }
}
