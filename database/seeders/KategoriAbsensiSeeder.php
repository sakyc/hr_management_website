<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class KategoriAbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('username', 'admin')->first();
        $array = [
            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Hadir',
                'kode' => 'A',
                'status' => false,
                'jenis' => 'Presensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],

            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Tugas Luar/Remote/WFH',
                'kode' => 'T',
                'status' => true,
                'jenis' => 'Presensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],
            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Sakit',
                'kode' => 'S',
                'status' => true,
                'jenis' => 'Absensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],
            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Izin',
                'kode' => 'I',
                'status' => true,
                'jenis' => 'Absensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],
            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Cuti',
                'kode' => 'C',
                'status' => true,
                'jenis' => 'Absensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],
            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Libur',
                'kode' => 'L',
                'status' => true,
                'jenis' => 'Absensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],
            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Gangguan Sistem',
                'kode' => 'E',
                'status' => true,
                'jenis' => 'Absensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],

            [
                // 'id' => Uuid::uuid4()->toString(),
                'nama' => 'Lainnya',
                'kode' => 'LL',
                'status' => true,
                'jenis' => 'Absensi',
                'created_at' => '2024-02-29 14:55:57',
                'updated_at' => '2024-02-29 14:55:57',
                'created_by' => $admin->id,
            ],
        ];

        foreach ($array as $key => $value) {
            \App\Models\KategoriAbsensi::create($value);
        }
    }
}
