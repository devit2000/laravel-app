<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('prod_id');
            $table->string('prod_name', 50);
            $table->text('prod_des', 500);
            $table->integer('rate');
            $table->double('price_in');
            $table->double('price_out');
            $table->integer('cate_id');
            $table->integer('brand_id');
            $table->integer('active');
            $table->integer('ordernum');
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
        Schema::drop('products');
    }
}
