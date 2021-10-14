<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnswersTable extends Migration
{
    
    public function up()
    {
        Schema::create('Answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Request_id');
            $table->foreign('Request_id')->references('id')->on('requirement');
            $table->string('Description');
            $table->string('Observation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Answers');
    }
}
