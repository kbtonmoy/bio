<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
           'role_id'       => '1',
           'name'       => 'Admin',
           'username'   => 'superadmin',
           'email'      => 'admin@biogeny.net',
           'password'   => Hash::make('123456')

        ]);

         DB::table('users')->insert([
           'role_id'       => '2',
           'name'       => 'Author',
           'username'   => 'author',
           'email'      => 'kbtonmoy@gmail.com',
           'password'   => Hash::make('123456')

        ]);
    }
}
