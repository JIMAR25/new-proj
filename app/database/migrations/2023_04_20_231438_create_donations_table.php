<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->decimal('montant', 8, 2)->nullable(); // Ajouter une valeur par défaut de 0
            $table->string('transaction_id')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('ville')->nullable();
    $table->date('date_livraison')->nullable();
   
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
        Schema::dropIfExists('donations');
    }
}
