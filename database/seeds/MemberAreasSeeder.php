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
                ['name' => 'মানিকপুর দক্ষিণ'],
                ['name' => 'মানিকপুর উত্তর'],
                ['name' => 'মুরাইম দক্ষিণ'],
                ['name' => 'মুরাইম উত্তর'],
                ['name' => 'মুটকি'],
                ['name' => 'মনোহরপুর'],
                ['name' => 'রুদ্ররামপুর'],
                ['name' => 'চাঁদপুর'],
                ['name' => 'হোসেনপুর']
            ]);
    }
}
