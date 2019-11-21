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
        //
        factory(\App\User::class, 10)->create();

        //\DB::table('users')->insert([
        //'name' => 'Primeiro Usuário',
        //'email' => 'email@email.com',
        //'password' => bcrypt('secret')
       // ]);
    }

}
