<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        City::upsert([
            ['name' => 'Moscow', 'code' => 'msc'],
            ['name' => 'Kazan', 'code' => 'kzn'],
            ['name' => 'Saint-petersburg', 'code' => 'spb'],
        ], ['name', 'code'], ['name', 'code']);
    }
}
