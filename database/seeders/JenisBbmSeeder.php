<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JenisBbmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Pertamina
            ['jenis_bbm' => 'Pertalite', 'vendor_id' => 1, 'harga_bbm' => 10000],
            ['jenis_bbm' => 'Pertamax', 'vendor_id' => 1, 'harga_bbm' => 12950],
            ['jenis_bbm' => 'Pertamax Green 95', 'vendor_id' => 1, 'harga_bbm' => 13500],
            ['jenis_bbm' => 'Pertamax Turbo', 'vendor_id' => 1, 'harga_bbm' => 14400],

            // Shell
            ['jenis_bbm' => 'Shell Super', 'vendor_id' => 2, 'harga_bbm' => 15530],
            ['jenis_bbm' => 'Shell V-Power', 'vendor_id' => 2, 'harga_bbm' => 16350],

            // Vivo
            ['jenis_bbm' => 'Revvo 90', 'vendor_id' => 3, 'harga_bbm' => 13800],
            ['jenis_bbm' => 'Revvo 92', 'vendor_id' => 3, 'harga_bbm' => 15300],
            ['jenis_bbm' => 'Revvo 95', 'vendor_id' => 3, 'harga_bbm' => 16150],

            // BP
            ['jenis_bbm' => 'BP 92', 'vendor_id' => 4, 'harga_bbm' => 14900],
            ['jenis_bbm' => 'BP Ultimate 95', 'vendor_id' => 4, 'harga_bbm' => 16350],
        ];


        DB::table('jenis_bbms')->insert($data);

    }
}
