<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = User::where('username', 'admin')->first();
        $data = ['Web Developer', 'Android Developer', 'Desain Grafis', 'Finance'];
        $temp = [];
        foreach ($data as $key => $item) {
            $temp[] = [
                // 'id' => Uuid::uuid4()->toString(),
                'created_by' => $admin->id,
                'nama_jabatan' => $item,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('jabatan')->insert($temp);
    }
}
