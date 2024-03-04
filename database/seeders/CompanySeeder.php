<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
           "id" => 1,
           "name" => "Georgian Airways",
            "iata_code" => "TQZ"
        ]);
        Company::create([
           "id" => 2,
           "name" => "Turkish Airlines",
            "iata_code" => "THY"
        ]);
        Company::create([
            "id" => 3,
            "name" => "Hong Kong Airlines",
            "iata_code" => "CRK"
        ]);
    }
}
