<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pengaturan = [
            'nama_perusahaan' => 'CV. Teknologi Adhikarya Prima',
            'alamat' => 'Bangau Village Regency, Ruko No, RT.04/RW.2, Bojong, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43281',
            'lat' => -6.805745071498961,
            'long' => 107.17591841433331,
            'radius_absen' => 10,
            'logo' => 'logo.png',
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('pengaturan')->insert($pengaturan);
    }
}
