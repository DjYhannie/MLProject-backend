<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('name');
            $table->longText('question1');
            $table->longText('question2');
            $table->longText('question3');
            $table->string('category1');
            $table->string('category2');
            $table->string('category3');
            $table->string('category4');
            $table->string('category5');
            $table->string('category6');
            $table->string('category7');
            $table->string('category8');
            $table->string('category9');
            $table->string('category10');
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
        Schema::dropIfExists('forms');
    }
}
