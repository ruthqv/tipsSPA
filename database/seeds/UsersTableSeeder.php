<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  		\DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' =>'admin',
                'email' => 'rqvaquero@gmail.com',
                'password' => bcrypt('123456'),
                'type' => 'admin'
            ),
        ));       
    }
}
