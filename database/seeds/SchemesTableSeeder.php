<?php

use Illuminate\Database\Seeder;

class SchemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Schemes')->insert(array(
            array('description' => 'House ownership scheme'),
            array('description' => 'Keke and motorcycle scheme'),
            array('description' => 'Financial empowerment scheme')
        ));
    }
}
