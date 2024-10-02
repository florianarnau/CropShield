<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgronomicInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agronomic_information')->insert([
            [
                'varieties_id' => 12,
                'parcel_id' => 1,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 2,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 13,
                'parcel_id' => 3,
                'culture_id' => 7,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 4,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 5,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 6,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 12,
                'parcel_id' => 7,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 8,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 9,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 10,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 11,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 12,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 1,
                'parcel_id' => 13,
                'culture_id' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 14,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'varieties_id' => 11,
                'parcel_id' => 15,
                'culture_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
