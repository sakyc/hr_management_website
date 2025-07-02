<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HariLiburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $year = date('Y');
        // guzzle 
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api-harilibur.vercel.app/api?year=' . $year);
        $data = json_decode($response->getBody()->getContents(), true);

        foreach ($data as $hari) {
            if ($hari['is_national_holiday']) {
                \App\Models\HariLibur::create([
                    'tanggal'   => $hari['holiday_date'],
                    'keterangan' => $hari['holiday_name'],
                    'created_by' => 1
                ]);
            }
        }
    }
}
