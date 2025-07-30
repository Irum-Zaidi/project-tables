<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $json = File::get(database_path('JSON/cities.json'));
        $cities = collect(json_decode($json));

        $cities->each(function ($city) {
            City::create([
                'city_name' => $city->city_name
            ]);
        });
    }
}
