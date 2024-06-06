<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasLokasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fasilitas = [
            ['nama' => 'Mushola'],
            ['nama' => 'Kantin'],
            ['nama' => 'Kamar Mandi'],
            ['nama' => 'Gazebo'],
        ];

        foreach ($fasilitas as $facility) {
            Fasilitas::create($facility);
        }
    }
}