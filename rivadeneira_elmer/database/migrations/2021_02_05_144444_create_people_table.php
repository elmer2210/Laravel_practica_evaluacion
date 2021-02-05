<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario');
            $table->string('nombreCompleto');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('edad');
            $table->string('fechaNacimiento');
            $table->bigInteger('configuration_id')->nullable();
            $table->timestamps();
            $table->foreign('configuration_id')->references('id')->on('configurations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
