<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Levels')->insert(array(
            array('description' => 'Classic','amount' => 3000),
            array('description' => 'Premium','amount' => 5000),
            array('description' => 'Platinum', 'amount' => 10000)
        ));
    }
}
