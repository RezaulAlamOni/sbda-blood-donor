<?php

use Illuminate\Database\Seeder;

class MemberAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteer_areas')
            ->insert([
                ['name' => 'মানিকপুর'],
                ['name' => 'ইসলামপুর'],
                ['name' => 'মুরাইম'],
                ['name' => 'মুটকি'],
                ['name' => 'মনোহরপুর'],
                ['name' => 'রুদ্ররামপুর'],
                ['name' => 'চাঁদপুর'],
                ['name' => 'হোসেনপুর']
            ]);
    }
}
