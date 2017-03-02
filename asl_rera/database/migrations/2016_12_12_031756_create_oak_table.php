<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOakTable extends Migration
{
    public function up()
    {
        Schema::create('oak', function (Blueprint $table) {

            $table->increments('id');
            $table->string('oak_room', 255);
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
        Schema::drop('oak');
    }
}
