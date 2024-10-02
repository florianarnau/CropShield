<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VarietiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('varieties')->insert([
            [
                'name' => 'Gariguette',
                'culture_id' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Mara des bois',
                'culture_id' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Charentais',
                'culture_id' => 2,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Cantaloup',
                'culture_id' => 2,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Bintje',
                'culture_id' => 3,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Charlotte',
                'culture_id' => 3,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Golden',
                'culture_id' => 4,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Granny Smith',
                'culture_id' => 4,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Roma',
                'culture_id' => 5,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Coeur de boeuf',
                'culture_id' => 5,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Chardonnay',
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Merlot',
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Red Tide',
                'culture_id' => 7,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
