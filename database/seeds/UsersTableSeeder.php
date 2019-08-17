<?php

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'name'  => '이철원',
            'email' => 'chlwn.lee@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => Str::random(10),
            'is_admin'  => 1,
            'role'      => 'developer'
        ]);

        factory(User::class, 5)->create();

        factory(User::class, 1)->state('admin')->create();

        factory(User::class, 1)->state('developer')->create();

        factory(User::class, 1)->state('manager')->create();

        factory(User::class, 1)->state('planner')->create();

//        factory(User::class, 4)->states(['admin', 'developer', 'manager', 'planner'])->create();

    }
}
