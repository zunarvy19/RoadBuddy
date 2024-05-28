<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("vendors")->insert([
            [
                "namaVendor" => "Pertamina",
            ],
            [
                "namaVendor"=> "Shell",
            ],
            [
                "namaVendor" => "Vivo",
            ],
            [
                "namaVendor" => "BP",
            ],
        ]);
    }
}
