<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificacions', function (Blueprint $table) {
            $table->id();
            $table->string('unidad_negocio_cer')->nullable(true);
            $table->string('gerencia_cer')->nullable(true);
            $table->string('cedula_cer')->nullable(true);
            $table->string('nombre_cer')->nullable(true);
            $table->string('curso_cer')->nullable(true);
            $table->string('certificacion_tecnica_cer')->nullable(true);
            $table->string('certificacion_del_mes_cer')->nullable(true);
            $table->date('fecha_de_inicio_cer')->nullable(true);
            $table->date('fecha_de_fin_cer')->nullable(true);
            $table->string('total_horas_cer')->nullable(true);
            $table->string('lugar_curso_cer')->nullable(true);
            $table->string('area_partner_cer')->nullable(true);
            $table->string('metodologia_cer')->nullable(true);
            $table->string('tipo_curso_cer')->nullable(true);
            $table->string('nota_cer')->nullable(true);
            $table->string('asistencia_cer')->nullable(true);
            $table->string('satisfacion_cer')->nullable(true);
            $table->string('estado_cer')->nullable(true);
            $table->string('mes_finalizacion_cer')->nullable(true);
            $table->string('anio_cierre_cer')->nullable(true);
            $table->string('pago_cer')->nullable(true);
            $table->string('costo_curso_cer')->nullable(true);
            $table->string('costo_curso_empresa_cer')->nullable(true);
            $table->string('documento_curso_cer')->nullable(true);
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
        Schema::dropIfExists('certificacions');
    }
}
