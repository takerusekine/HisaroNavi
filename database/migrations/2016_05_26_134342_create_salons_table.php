<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalonsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('salons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('name');
            $table->string('kana_name');
            $table->string('catch_msg')->nullable();
            $table->string('summary')->nullable();
            $table->string('top_img')->nullable();
            $table->string('outerier_img')->nullable();
            $table->string('interier_img')->nullable();
            $table->string('staff_img')->nullable();
            $table->string('open_time')->nullable();
            $table->string('close_day')->nullable();
            $table->integer('area_code')->nullable();
            $table->string('address');
            $table->string('near_st')->nullable();
            $table->string('load_navi')->nullable();
            $table->string('tel');
            $table->string('machine_num')->nullable();
            $table->string('parking')->nullable();
            $table->string('site_url')->nullable();
            $table->string('kodawari')->nullable();
            $table->string('customers')->nullable();
            $table->integer('min_price')->nullable();
            $table->timestamps();

            //外部キー制約
            $table->foreign('company_id')->references('id')->on('companies');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('salons');
    }
}
