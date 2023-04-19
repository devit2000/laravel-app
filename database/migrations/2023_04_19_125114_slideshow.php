<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Slideshow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('slideshow', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('slide_id');
            $table->string('title', 50);
            $table->text('subtitle', 500);
            $table->text('description', 500);
            $table->integer('active');
            $table->integer('ordernum');
            $table->string('img', 500);
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
        Schema::drop('slideshow');
    }
}
