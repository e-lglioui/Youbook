<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_reservation');
            $table->date('date_retour')->nullable();
            $table->boolean('retourne')->default(false);
            $table->unsignedBigInteger('livre_id');
            $table->unsignedBigInteger('etudiant_id');
            $table->timestamps();

            $table->foreign('livre_id')->references('id')->on('livres')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}

