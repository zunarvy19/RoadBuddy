<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class motorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motorcycles = [
            ['brand' => 'Honda', 'model' => 'CBR150R'],
            ['brand' => 'Honda', 'model' => 'Vario'],
            ['brand' => 'Honda', 'model' => 'Beat'],
            ['brand' => 'Honda', 'model' => 'PCX 160'],
            ['brand' => 'Honda', 'model' => 'ADV 150'],
            ['brand' => 'Honda', 'model' => 'Supra X 125'],
            ['brand' => 'Honda', 'model' => 'Stylo 160'],
            ['brand' => 'Yamaha', 'model' => 'NMax'],
            ['brand' => 'Yamaha', 'model' => 'Aerox'],
            ['brand' => 'Yamaha', 'model' => 'Mio'],
            ['brand' => 'Yamaha', 'model' => 'XSR 155'],
            ['brand' => 'Yamaha', 'model' => 'R15'],
            ['brand' => 'Yamaha', 'model' => 'Vixion'],
            ['brand' => 'Yamaha', 'model' => 'MT-15'],
            ['brand' => 'Yamaha', 'model' => 'Fazzio'],
            ['brand' => 'Suzuki', 'model' => 'GSX-R150'],
            ['brand' => 'Suzuki', 'model' => 'Satria F150'],
            ['brand' => 'Suzuki', 'model' => 'Address'],
            ['brand' => 'Suzuki', 'model' => 'Nex II'],
            ['brand' => 'Suzuki', 'model' => 'Bandit 150'],
            ['brand' => 'Suzuki', 'model' => 'GSX-S150'],
            ['brand' => 'Suzuki', 'model' => 'Smash FI'],
        ];

        DB::table('brands')->insert($motorcycles);
    }
}
