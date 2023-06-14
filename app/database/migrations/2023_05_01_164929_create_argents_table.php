<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArgentsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('argents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->decimal('montant', 8, 2);
            $table->string('transaction_id');
            $table->string('adresse');
            $table->string('code_postal')->nullable();
            $table->string('ville');
            $table->timestamps();
        });
    }

    /**
     * Revert la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('argents');
    }
}
