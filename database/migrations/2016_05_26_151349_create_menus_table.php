<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {


        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salon_id')->unsigned();
            $table->string('machine_name')->nullable();
            $table->string('grade')->nullable();
            $table->string('machine_exp')->nullable();
            $table->string('watt')->nullable();
            $table->string('duration')->nullable();
            $table->string('use_cond')->nullable();
            $table->integer('menu_price')->nullable();
            $table->timestamps();
            //外部キー
            $table->foreign('salon_id')->references('id')->on('salons');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
