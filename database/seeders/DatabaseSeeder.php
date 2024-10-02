<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            RecorderTableSeeder::class,
            UsersTableSeeder::class,
            BlockedUsersTableSeeder::class,
            CultureTableSeeder::class,
            VarietiesTableSeeder::class,
            SensorTableSeeder::class,
            DssTableSeeder::class,
            SensorRecorderTableSeeder::class,
            WeatherStationTableSeeder::class,
            WeatherForecastSubscriptionTableSeeder::class,
            DailySummarySubscriptionTableSeeder::class,
            ParcelTableSeeder::class,
            AgronomicInformationTableSeeder::class,
            DssSubscriptionTableSeeder::class,
        ]);
    }
}
