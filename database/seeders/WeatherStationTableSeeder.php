<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherStationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_station')->insert([
            [
                'name' => 'Station météo Abbatucci',
                'latitude' => 41.771537997129485,
                'longitude' => 8.897302565641393,
                'altitude' => 63,
                'city' => 'Calzola',
                'department' => '2A',
                'isActive' => 0,
                'recorder_id' => null,
                'user_id' => null,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Aiguillon',
                'latitude' => 44.30146224776923,
                'longitude' => 0.3387737274169922,
                'altitude' => 43,
                'city' => 'Aiguillon',
                'department' => '47',
                'isActive' => 1,
                'recorder_id' => 1,
                'user_id' => 3,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Ailleville',
                'latitude' => 48.25056899176047,
                'longitude' => 4.703946188092232,
                'altitude' => 0,
                'city' => 'Ailleville',
                'department' => '10',
                'isActive' => 1,
                'recorder_id' => 2,
                'user_id' => 4,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Ailly',
                'latitude' => 48.94296000000001,
                'longitude' => -0.08352299999999202,
                'altitude' => 43,
                'city' => 'Ailly',
                'department' => '27',
                'isActive' => 1,
                'recorder_id' => 3,
                'user_id' => 5,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Alaigne',
                'latitude' => 43.113065112987066,
                'longitude' => 2.098463773727417,
                'altitude' => 287,
                'city' => 'Alaigne',
                'department' => '11',
                'isActive' => 1,
                'recorder_id' => 4,
                'user_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Bagnizeau',
                'latitude' => 45.89877113532165,
                'longitude' => -0.31881417790987143,
                'altitude' => 78,
                'city' => 'Bagnizeau',
                'department' => '17',
                'isActive' => 1,
                'recorder_id' => 5,
                'user_id' => 7,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Beaumont-Monteux',
                'latitude' => 45.01778962124119,
                'longitude' => 4.89715576171875,
                'altitude' => 120,
                'city' => 'Beaumont-Monteux',
                'department' => '26',
                'isActive' => 1,
                'recorder_id' => 6,
                'user_id' => 8,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Beaune',
                'latitude' => 47.03400502745,
                'longitude' => 4.813583569311504,
                'altitude' => 338,
                'city' => 'Beaune',
                'department' => '21',
                'isActive' => 1,
                'recorder_id' => 7,
                'user_id' => 9,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Bel-Air',
                'latitude' => 45.041372873283656,
                'longitude' => -0.7086597099805658,
                'altitude' => 0,
                'city' => 'Margaux',
                'department' => '33',
                'isActive' => 1,
                'recorder_id' => 8,
                'user_id' => 10,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Bargheim',
                'latitude' => 48.208999999999996,
                'longitude' => 7.374220000000037,
                'altitude' => 190,
                'city' => 'Bergheim',
                'department' => '68',
                'isActive' => 1,
                'recorder_id' => 9,
                'user_id' => 11,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Berson',
                'latitude' => 45.12024872840201,
                'longitude' => -0.6142902374267578,
                'altitude' => 48,
                'city' => 'Le Coudeau',
                'department' => '33',
                'isActive' => 1,
                'recorder_id' => 10,
                'user_id' => 12,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Bois de Tarsac',
                'latitude' => 45.68085834749101,
                'longitude' => 0.034356973749595454,
                'altitude' => 84,
                'city' => 'Tarsac',
                'department' => '16',
                'isActive' => 1,
                'recorder_id' => 11,
                'user_id' => 13,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Camplazens',
                'latitude' => 43.1919815084434,
                'longitude' => 3.1253582239151,
                'altitude' => 137,
                'city' => 'Armissan',
                'department' => '11',
                'isActive' => 1,
                'recorder_id' => 12,
                'user_id' => 14,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Cannet',
                'latitude' => 43.61349999999998,
                'longitude' => -0.06818999999995912,
                'altitude' => 0,
                'city' => 'Riscle',
                'department' => '32',
                'isActive' => 1,
                'recorder_id' => 13,
                'user_id' => 15,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Caveau d\'Heraclès',
                'latitude' => 43.7289867301098,
                'longitude' => 4.233381076057423,
                'altitude' => 0,
                'city' => 'Codognan',
                'department' => '30',
                'isActive' => 1,
                'recorder_id' => 14,
                'user_id' => 16,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Casouls-lès-Béziers',
                'latitude' => 43.38349200000002,
                'longitude' => 3.0865320000000462,
                'altitude' => 0,
                'city' => 'Cazouls-lés-Béziers',
                'department' => '34',
                'isActive' => 1,
                'recorder_id' => 15,
                'user_id' => 17,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Château La Pointe',
                'latitude' => 44.92652899146565,
                'longitude' => -0.21603422005764372,
                'altitude' => 0,
                'city' => 'Pomerol',
                'department' => '33',
                'isActive' => 1,
                'recorder_id' => 16,
                'user_id' => 18,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Grand Est',
                'latitude' => 48.47685300000001,
                'longitude' => 6.180904000000056,
                'altitude' => 305,
                'city' => 'Haroué',
                'department' => '54',
                'isActive' => 1,
                'recorder_id' => 17,
                'user_id' => 19,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Jurignac',
                'latitude' => 45.528355117522594,
                'longitude' => -0.03710997103212321,
                'altitude' => 111,
                'city' => 'Jurignac',
                'department' => '16',
                'isActive' => 1,
                'recorder_id' => 18,
                'user_id' => 20,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Layrac',
                'latitude' => 44.09785660343295,
                'longitude' => 0.6265586614608765,
                'altitude' => 94,
                'city' => 'Layrac',
                'department' => '47',
                'isActive' => 1,
                'recorder_id' => 19,
                'user_id' => 21,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Le Puy-Notre-Dame',
                'latitude' => 47.13480599999999,
                'longitude' => -0.23189899999999763,
                'altitude' => 0,
                'city' => 'Le Puy-Notre-Dame',
                'department' => '49',
                'isActive' => 1,
                'recorder_id' => 20,
                'user_id' => 22,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Malaville',
                'latitude' => 45.53851100000001,
                'longitude' => -0.11862699999999338,
                'altitude' => 80,
                'city' => 'Mainx',
                'department' => '16',
                'isActive' => 1,
                'recorder_id' => 21,
                'user_id' => 23,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Montagnac',
                'latitude' => 43.791252000000014,
                'longitude' => 6.167769999999995,
                'altitude' => 672,
                'city' => 'Montagnac Montpezat',
                'department' => '04',
                'isActive' => 1,
                'recorder_id' => 22,
                'user_id' => 24,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Montagnac-sur-Auvignon',
                'latitude' => 44.1738323575482,
                'longitude' => 0.4524993896484375,
                'altitude' => 144,
                'city' => 'Montagnac-sur-Auvignon',
                'department' => '47',
                'isActive' => 1,
                'recorder_id' => 23,
                'user_id' => 25,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Station météo Andiran',
                'latitude' => 44.090271999999985,
                'longitude' => 0.2728510000000117,
                'altitude' => 100,
                'city' => 'Andiran',
                'department' => '47',
                'isActive' => 0,
                'recorder_id' => null,
                'user_id' => null,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
