<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsDressingUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids_dressing_up', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_name', 255)->unique();
            $table->integer('img');
            $table->integer('price');
            $table->integer('rating');
            $table->integer('product_amount');
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
