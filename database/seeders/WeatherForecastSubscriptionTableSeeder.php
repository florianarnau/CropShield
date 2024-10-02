<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WeatherForecastSubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_forecast_subscription')->insert([
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'station_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'station_id' => 8,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'station_id' => 11,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'station_id' => 12,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
