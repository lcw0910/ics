<?php

use App\Model\User;
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
        /*DB::table('users')->insert([
            'name'  => '이철원',
            'email' => 'chlwn.lee@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => Str::random(10),
            'is_admin'  => 1,
            'role'      => 'developer'
        ]);*/

        factory(User::class, 20)->create();

        factory(User::class, 3)->state('admin')->create();

        factory(User::class, 5)->state('developer')->create();

        factory(User::class, 5)->state('manager')->create();

        factory(User::class, 5)->state('planner')->create();

//        factory(User::class, 4)->states(['admin', 'developer', 'manager', 'planner'])->create();

    }
}
