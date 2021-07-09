<?php

use Illuminate\Database\Seeder;

class DonorAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donor_areas')
            ->insert([
                ['name' => 'Noakhali'],
                ['name' => 'Dhaka']
            ]);
    }
}
