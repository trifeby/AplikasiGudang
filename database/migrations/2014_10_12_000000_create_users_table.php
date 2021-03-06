<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->default(2);
            $table->string('password');
            $table->string('id_user')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

         DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@admin.com",
            'role' => "1",
            'password' => bcrypt("admin")
            ]);
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
