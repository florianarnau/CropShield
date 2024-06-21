<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sensor = [
            [
                'type' => 'Température',
                'unite' => '°C',
                'description' => 'Mesure la température ambiante',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'type' => 'Humidité',
                'unite' => '%',
                'description' => 'Mesure l\'humidité relative',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'type' => 'Pression atmosphérique',
                'unite' => 'hPa',
                'description' => 'Mesure la pression atmosphérique',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'type' => 'Précipitation',
                'unite' => 'mm',
                'description' => 'Mesure les précipitations',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'type' => 'Vitesse du vent',
                'unite' => 'm/s',
                'description' => 'Mesure la vitesse du vent',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];

        DB::table('sensor')->insert($sensor);
    }
}
