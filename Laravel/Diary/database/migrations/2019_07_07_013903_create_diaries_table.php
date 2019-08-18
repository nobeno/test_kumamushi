<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('barth')->nullable();
            $table->string('profile')->nullable();
            $table->string('image_path')->nullable();
            $table->string('goal1')->nullable();
            $table->string('deadline1')->nullable();
            $table->string('detail1')->nullable();
            $table->string('goal2')->nullable();
            $table->string('deadline2')->nullable();
            $table->string('detail2')->nullable();
            $table->string('goal3')->nullable();
            $table->string('deadline3')->nullable();
            $table->string('detail3')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('diaries');
    }
}
