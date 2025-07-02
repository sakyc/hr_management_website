<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JamKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jamKerja = [
            [
                'nama_jam_kerja' => 'Pagi',
                'jam_masuk' => '09:00:00',
                'jam_pulang' => '17:00:00',
                'created_by' => 1
            ],
            [
                'nama_jam_kerja' => 'Siang',
                'jam_masuk' => '13:00:00',
                'jam_pulang' => '21:00:00',
                'created_by' => 1
            ],
            [
                'nama_jam_kerja' => 'Malam',
                'jam_masuk' => '21:00:00',
                'jam_pulang' => '05:00:00',
                'created_by' => 1
            ]
        ];

        foreach ($jamKerja as $jam) {
            \App\Models\JamKerja::create($jam);
        }
    }
}
