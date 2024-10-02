<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DssSubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dss_subscription')->insert([
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'type' => 'abonnement gratuit pour essai',
                'parcel_id' => 8,
                'dss_id' => 6,
                'station_id' => 12,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'type' => 'abonnement gratuit pour essai',
                'parcel_id' => 9,
                'dss_id' => 6,
                'station_id' => 13,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
