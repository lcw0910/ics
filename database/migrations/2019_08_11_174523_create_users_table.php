<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('role', ['operator', 'developer', 'manager', 'planner']);
            $table->tinyInteger('is_admin', false, true);
            $table->timestamp('updated_at')->nullable()->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP()'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
            $table->softDeletes();
//            $table->timestamps();
        });

        if (Schema::hasTable('users')) {
            DB::table('users')->insert([
                'name'  => '이철원',
                'email' => 'chlwn.lee@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => Str::random(10),
                'is_admin'  => 1,
                'role'      => 'developer'
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
