<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgencesTable extends Migration
{
    public function up()
    {
        Schema::create('urgences', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->decimal('montant_demande', 8, 2);
            $table->decimal('montant_actuel', 8, 2)->default(0);
            $table->date('date_limite');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('urgences');
    }
}
