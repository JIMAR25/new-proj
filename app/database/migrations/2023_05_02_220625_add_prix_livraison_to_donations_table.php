<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrixLivraisonToDonationsTable extends Migration
{
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->decimal('prix_livraison', 8, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropColumn('prix_livraison');
        });
    }
}
