<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecorderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recorders')->insert([
            [
                'name' => '00000433',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00204392',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000822',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00001F69',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00001A23',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '000018BF',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000FA1',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00002842',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000D8E',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000BB5',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000F9B',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000ED8',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '0120346E',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00000921',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00208086',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '002038A3',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '002088B9',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '000011CD',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '0000096E',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00205469',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '00203337',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '012058EC',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => '0000132F',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
