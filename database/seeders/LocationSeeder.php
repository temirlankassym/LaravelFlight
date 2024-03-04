<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            "name" => "Tbilisi",
            "code" => "TBS",
            "country_id" => 1,
        ]);
        Location::create([
            "name" => "Istanbul",
            "code" => "IST",
            "country_id" => 2,
        ]);
        Location::create([
            "name" => "Hong Kong",
            "code" => "HKG",
            "country_id" => 3,
        ]);
    }
}
