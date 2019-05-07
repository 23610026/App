<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
          $table->Increments('id');
          $table->String('Title')->nullable();
          $table->String('Question1')->nullable();
          $table->String('Question2')->nullable();
          $table->String('Question3')->nullable();
          $table->String('Question4')->nullable();
          $table->String('Question5')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
