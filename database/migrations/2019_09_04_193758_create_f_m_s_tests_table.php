<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFMSTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_m_s_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('santadillasPF');
            $table->string('santadillasObservaciones');

            $table->string('paso_vallaI');
            $table->string('paso_vallaD');
            $table->string('paso_vallaPF');
            $table->string('paso_vallaObservaciones');

            $table->string('estocada_lineaI');
            $table->string('estocada_lineaD');
            $table->string('estocada_lineaPF');
            $table->string('estocada_lineaObservaciones');

            $table->string('movilidad_hombrosI');
            $table->string('movilidad_hombrosD');
            $table->string('movilidad_hombrosPF');
            $table->string('movilidad_hombrosObservaciones');

            $table->string('elev_activa_pierna_rectaI');
            $table->string('elev_activa_pierna_rectaD');
            $table->string('elev_activa_pierna_rectaPF');
            $table->string('elev_activa_pierna_rectaObservaciones');

            $table->string('estab_tronco_en_flexionI');
            $table->string('estab_tronco_en_flexionD');
            $table->string('estab_tronco_en_flexionPF');
            $table->string('estab_tronco_en_flexionObservaciones');

            $table->string('estab_tronco_en_rotacionI');
            $table->string('estab_tronco_en_rotacionD');
            $table->string('estab_tronco_en_rotacionPF');
            $table->string('estab_tronco_en_rotacionObservaciones');

            $table->string('total');
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
        Schema::dropIfExists('f_m_s_tests');
    }
}
