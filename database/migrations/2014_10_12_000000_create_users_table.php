<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['male','female','other']);
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('nationality');
            $table->date('dob');
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
        Schema::dropIfExists('tb_teachers');
    }
}
