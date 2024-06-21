<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'description' => 'Administrateur du site',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'user',
                'description' => 'Utilisateur standard',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
