<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commentblog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentblog', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('blog_id');

            $table->foreign('blog_id')->references('id')->on('addblog')->onDelete('cascade');
            $table->string('name');
            $table->string('comment');
            $table->string('email')->unique();
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
        //
    }
}
