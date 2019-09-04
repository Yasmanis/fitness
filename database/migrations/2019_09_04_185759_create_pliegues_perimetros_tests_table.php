<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlieguesPerimetrosTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pliegues_perimetros_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->float('tripcipital');
            $table->float('plieguesgemelo');
            $table->float('subescapular');
            $table->float('suprailiaco');
            $table->float('abdominal');
            $table->float('brazo');
            $table->float('pecho');
            $table->float('abdomen');
            $table->float('cadera');
            $table->float('muslo');
            $table->float('perimetrogemelo');
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
        Schema::dropIfExists('pliegues_perimetros_tests');
    }
}
