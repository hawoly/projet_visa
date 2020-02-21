<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                 [
                     'name'              => 'super',
                     'email'             => 'super@gmail.com',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$VcetLnGfG0dSDhdrHW2PZuqPkyCwHZGSuaqshoKPpbngxym33ek1K', // password
                     'roles'             => 'supadmin',
                     'remember_token'    => Str::random(10),
                 ]
             ]
          );
          
    }
}
