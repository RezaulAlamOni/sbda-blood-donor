<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')
            ->insert([[
                'name' => 'SBDA ADMIN' ,
                'email' => 'sbda@admin.com',
                'password' => Hash::make('12345678'),
                'status' => 1,
                'type' => 1,
            ]]);
    }
}
