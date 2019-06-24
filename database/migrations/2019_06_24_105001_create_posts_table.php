<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('type');
            $table->string('pro');
            $table->string('prop');
            $table->string('topic');
            $table->integer('price');
            $table->string('address')->nullable();
            $table->string('road')->nullable();
            $table->string('address_name')->nullable();
            $table->string('district');
            $table->string('amphoe');
            $table->string('province');
            $table->string('zipcode');
            $table->integer('floor')->nullable();
            $table->integer('size')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('garage')->nullable();
            $table->longText('nearplace')->nullable();
            $table->longText('description')->nullable();
            $table->longText('image');
            $table->date('exp');
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
        Schema::dropIfExists('posts');
    }
}
