<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_seller')->nullable();
            $table->string('seller_address')->nullable();
            $table->string('seller_contact_no')->nullable();
            $table->string('car_price')->nullable();
            $table->string('car_engine')->nullable();
            $table->string('year')->nullable();
            $table->string('color')->nullable();
            $table->string('maker')->nullable();
            $table->string('reading')->nullable();
            $table->integer('created_by');
            $table->softDeletes();
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
        Schema::dropIfExists('cars');
    }
}
