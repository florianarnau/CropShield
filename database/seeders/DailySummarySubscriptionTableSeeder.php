<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DailySummarySubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_summary_subscription')->insert([
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'user_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'user_id' => 27,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'startDate' => '2024-01-01',
                'endDate' => '2024-12-31',
                'user_id' => 43,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
