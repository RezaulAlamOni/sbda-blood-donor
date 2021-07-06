<?php

use Illuminate\Database\Seeder;

class BloodGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blood_groups')
            ->insert([
                ['name' => 'A+'],
                ['name' => 'A-'],
                ['name' => 'B+'],
                ['name' => 'B-'],
                ['name' => 'O+'],
                ['name' => 'O-'],
                ['name' => 'AB+'],
                ['name' => 'AB-']
            ]);
    }
}
