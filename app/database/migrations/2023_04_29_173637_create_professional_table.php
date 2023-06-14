<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalTable extends Migration
{
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nom');
            $table->integer('age');
            $table->string('available_time');
            $table->string('telephone');
            $table->string('email');
            // add any other relevant columns here
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professionals');
    }
}
