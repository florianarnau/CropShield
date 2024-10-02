<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockedUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $latestUserId = DB::table('users')->latest()->value('id');

        DB::table('blocked_users')->insert([
            'reason' => 'bannissement définitif',
            'user_id' => $latestUserId,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
