<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirchTable extends Migration
{
    public function up()
    {
        Schema::create('birch', function (Blueprint $table) {

            $table->increments('id');
            $table->string('birch_room', 255);
            $table->nullableTimestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('birch');
    }
}
