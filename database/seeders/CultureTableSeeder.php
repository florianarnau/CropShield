<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CultureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $culture = [
            [
                'name' => 'Fraisier',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Melon',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Pomme de terre',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Pommier',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Tomate',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Vigne',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Oignon',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];

        DB::table('culture')->insert($culture);
    }
}
