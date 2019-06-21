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
            $table->string('tel')->nullable();
            $table->string('gender',5)->nullable();
            $table->string('career')->nullable();
            $table->text('address')->nullable();
            $table->string('password')->nullable();
            $table->string('img')->nullable();
            $table->integer('status')->default(0)->comment('0 is nomal, 1 is premium, 2 is vip');
            $table->date('expStatus')->nullable();
            $table->integer('isAdmin')->default(0)->comment('0 is user, 1 is admin');
            $table->string('regisWith')->default('website');
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
