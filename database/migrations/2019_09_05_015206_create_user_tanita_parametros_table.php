<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTanitaParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tanita_parametros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->date('fecha');
            $table->float('peso');
            $table->float('bmi');
            $table->float('peso_graso_general');
            $table->float('hidratacion');
            $table->float('peso_muscular');
            $table->float('complexion_fisica');
            $table->float('peso_oseo');
            $table->float('gasto_caloritico');
            $table->float('edad_metabolica');
            $table->float('grasa_visceral');
            $table->float('fuerza_mano_derecha');
            $table->float('fuerza_mano_izquierda');
            $table->text('observaciones');
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
        Schema::dropIfExists('user_tanita_parametros');
    }
}
