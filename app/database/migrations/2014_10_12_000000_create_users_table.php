<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('email')->unique();
            $table->string('tel')->nullable();
            $table->string('adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->date('date_de_naissance')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('client');
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
        Schema::dropIfExists('users');
    }
}
