<?php

use Illuminate\Database\Seeder;
// data master safe database
class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Account\Experience::create([
        	'name' => 'TEst',
        	'email' => 'Test 2',
        	'confirmed' => true
        ]);

        \App\Models\Account\Experience::create([
        	'name' => 'TEst',
        	'email' => null,
        	'confirmed' => true
        ]);

        \App\Models\Account\Experience::create([
        	'name' => 'TEst'
        ]);

    }
}
