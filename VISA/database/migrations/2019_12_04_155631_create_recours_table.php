<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('photo_personnel');
            $table->string('photo_passport');
            $table->string('releve_banvaire');
            $table->unsignedInteger('reponse_id')->nullable(true)->unique();
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
        Schema::dropIfExists('recours');
    }
}
