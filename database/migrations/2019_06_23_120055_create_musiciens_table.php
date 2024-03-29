<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusiciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musiciens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('email');
            $table->string('password');
            $table->string('city');
            $table->string('instrument');
            $table->year('birth_year');
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
        Schema::dropIfExists('musiciens');
    }
}
