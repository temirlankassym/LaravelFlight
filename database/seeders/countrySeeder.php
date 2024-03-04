<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class countrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
           "name" => "Georgia"
        ]);
        Country::create([
           "name" => "Turkey"
        ]);
        Country::create([
           "name" => "Hong Kong"
        ]);
    }
}
