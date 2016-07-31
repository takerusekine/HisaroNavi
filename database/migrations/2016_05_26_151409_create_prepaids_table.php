<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrepaidsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prepaids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salon_id')->unsigned();
            $table->string('otoku_type')->nullable();
            $table->string('subject_person')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_content')->nullable();
            $table->string('price')->nullable();
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
        Schema::drop('prepaids');
    }
}
