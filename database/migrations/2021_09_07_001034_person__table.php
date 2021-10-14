<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonTable extends Migration
{
    
    public function up()
    {
        Schema::create('Type_Documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('Education_Level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('Persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_Document_id');
            $table->foreign('type_Document_id')->references('id')->on('Type_Documents');
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('Education_Level_id');
            $table->foreign('Education_Level_id')->references('id')->on('Education_Level');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('Persons');
        Schema::dropIfExists('Education_Level');
        Schema::dropIfExists('Type_Documents');
    }
}
