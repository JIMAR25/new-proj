<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
