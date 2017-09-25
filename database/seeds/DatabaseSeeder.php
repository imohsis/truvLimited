<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        DB::table('Schemes')->insert([
            'name' => 'Keke Napep Ownership Scheme',
            'description' => ''
        ]);
        
        DB::table('Schemes')->insert([
            'name' => 'Motorcycle Ownership Scheme',
            'description' => ''
        ]);
        
        DB::table('Schemes')->insert([
            'name' => 'House Ownership Scheme',
            'description' => ''
        ]);
        
        DB::table('Stages')->insert([
           'name' => 'Stage One',
           'description' => ''
        ]);
        
        DB::table('Stages')->insert([
           'name' => 'Stage Two',
            'description' => ''
        ]);
        
        DB::table('Stages')->insert([
           'name' => 'Stage Three',
            'description' => '',
        ]);
        
        DB::table('Starting_Classes')->insert([
            'name' => 'Bronze',
            'price' => 2000,
            'description' => ''
        ]);
        
        DB::table('Starting_Classes')->insert([
            'name' => 'Silver',
            'price' => 4000,
            'description' => ''
        ]);
        
        DB::table('Starting_Classes')->insert([
            'name' => 'Gold',
            'price' => 6000,
            'description' => ''
        ]);
        
    }
}
