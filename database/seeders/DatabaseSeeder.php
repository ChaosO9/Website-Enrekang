<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $fasilitas = [
            ['nama' => 'Mushola'],
            ['nama' => 'Kantin'],
            ['nama' => 'Kamar Mandi'],
            ['nama' => 'Gazebo'],
        ];

        foreach ($fasilitas as $facility) {
            Fasilitas::create($facility);
        }

        $kategori = [
            ['nama_kategori' => 'Religi'],
            ['nama_kategori' => 'Alam'],
        ];

        foreach ($kategori as $category) {
            Kategori::create($category);
        }
    }
}