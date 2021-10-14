<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestTable extends Migration
{
    
    public function up()
    {
        Schema::create('Requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Persons_id');
            $table->string('Description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Requirement');
    }
}
