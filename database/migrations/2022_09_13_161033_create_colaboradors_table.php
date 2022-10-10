<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_col')->nullable(true);
            $table->string('apellido_col')->nullable(true);
            $table->string('cedula_col', 10)->nullable(true); 
            $table->string('cargo_col')->nullable(true); 
            $table->date('fecha_ingreso_col')->nullable(true); 
            $table->string('celular_col')->nullable(true);
            $table->string('direccion_col')->nullable(true); 
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
        Schema::dropIfExists('colaboradors');
    }
}
