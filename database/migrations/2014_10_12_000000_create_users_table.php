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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->string('type')->default('employee');
            $table->string('bio')->default('Awesome');
            $table->string('photo')->nullable();
=======
            $table->string('type')->default('user');
            $table->mediumText('bio')->nullable();
            $table->string('photo')->default('profile.png');
>>>>>>> 034f624a8f90e69bcb845dd7deb2a2130fe5410f
            $table->rememberToken();
            $table->timestamps();
        });
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
