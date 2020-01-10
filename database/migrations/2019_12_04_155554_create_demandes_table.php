<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('demandeur_id')->nullable(true)->unique();
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('adresse');
            $table->string('tel');
            $table->string('motif_demande');
            $table->date('date_prevu_depart');
            $table->string('lieu_residence');
            $table->string('duree_sejour');
            $table->string('photo_personnel');
            $table->string('photo_passport');
            $table->string('releve_banvaire');
            $table->unsignedInteger('status')->default(0);
            $table->unsignedInteger('destination_id')->nullable(true);
            $table->unsignedInteger('logement_id')->nullable(true);
            $table->string('reponse')->nullable(true);
            

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
        Schema::dropIfExists('demandes');
    }
}
