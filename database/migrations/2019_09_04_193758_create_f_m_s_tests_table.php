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
            $table->date('date');
            $table->integer('sentadillasPF')->default(0);
            $table->string('sentadillasObservaciones')->default("M");

            $table->integer('paso_vallaI')->default(0);
            $table->integer('paso_vallaD')->default(0);
            $table->integer('paso_vallaPF')->default(0);
            $table->string('paso_vallaObservaciones')->default("M");

            $table->integer('estocada_lineaI')->default(0);
            $table->integer('estocada_lineaD')->default(0);
            $table->integer('estocada_lineaPF')->default(0);
            $table->string('estocada_lineaObservaciones')->default("M");

            $table->integer('movilidad_hombrosI')->default(0);
            $table->integer('movilidad_hombrosD')->default(0);
            $table->integer('movilidad_hombrosPF')->default(0);
            $table->string('movilidad_hombrosObservaciones')->default("M");

            $table->integer('elev_activa_pierna_rectaI')->default(0);
            $table->integer('elev_activa_pierna_rectaD')->default(0);
            $table->integer('elev_activa_pierna_rectaPF')->default(0);
            $table->string('elev_activa_pierna_rectaObservaciones')->default("M");

            $table->integer('estab_tronco_en_flexionI')->default(0);
            $table->integer('estab_tronco_en_flexionD')->default(0);
            $table->integer('estab_tronco_en_flexionPF')->default(0);
            $table->string('estab_tronco_en_flexionObservaciones')->default("M");

            $table->integer('estab_tronco_en_rotacionI')->default(0);
            $table->integer('estab_tronco_en_rotacionD')->default(0);
            $table->integer('estab_tronco_en_rotacionPF')->default(0);
            $table->string('estab_tronco_en_rotacionObservaciones')->default("M");

            $table->string('total')->default(0);
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
