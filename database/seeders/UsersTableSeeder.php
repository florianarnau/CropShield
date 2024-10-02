<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => $faker->firstName,
            'firstname' => $faker->lastName,
            'email' => 'admin@example.com',
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'role_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        for ($i = 0; $i < 49; $i++) {
            DB::table('users')->insert([
                'name' => $faker->firstName,
                'firstname' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'login' => $faker->unique()->userName,
                'password' => Hash::make('user'),
                'role_id' => 2,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);
        }

        DB::table('users')->insert([
            'name' => $faker->firstName,
            'firstname' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'login' => $faker->unique()->userName,
            'password' => Hash::make('bani'),
            'role_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
