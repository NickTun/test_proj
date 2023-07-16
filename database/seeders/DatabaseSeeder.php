<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Driver::factory()->count(10)->create();
        \App\Models\Station::factory()->count(10)->create();
        \App\Models\Car::factory()->count(10)->create();

        for ($i = 1; $i <= 10; $i++) {
            \App\Models\Car_station::factory()->create([
                'car_id' => $i,
                'station_id' => \App\Models\Station::all()->random()->id
            ]);
        }
    }
}
