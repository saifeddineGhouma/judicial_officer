<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('info');
            $table->unsignedBigInteger('dossier_id');
            $table->foreign('dossier_id')->references('id')->on('dossiers');
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
        Schema::dropIfExists('detailles');
    }
}
