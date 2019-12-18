<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('age');
            $table->string('breed');
            $table->string('gender');
            $table->string('pair');
            $table->string('other_dogs');
            $table->string('other_cats');
            $table->string('with_kids');
            $table->string('castrated');
            $table->string('home_alone');
            $table->string('car_rides');
            $table->string('commands');
            $table->string('housebroken');
            $table->string('independent');
            $table->string('on_line');
            $table->string('fur_care');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('dogs');
    }
}
