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
        
        DB::table('users')->insert(array(
            array('name' => 'Tru V', 'email' => 'truvthinkshifts@gmail.com', 'password' => bcrypt('Thinkshifts2020'),'role_id' => App\UserRole::$ADMINISTRATOR)
        , array('name' => 'Truv Limited', 'email' => 'truvlimited@gmail.com', 'password' => bcrypt('Truvlimited2020'), 'role_id' => App\UserRole::$ADMINISTRATOR
        )));


    }
}
