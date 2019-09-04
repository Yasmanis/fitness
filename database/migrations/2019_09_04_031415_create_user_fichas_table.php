<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('edad');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->integer('id_perfil_tanita');
            $table->string('peso');
            $table->string('estatura');
            $table->text('perfil')->nullable();
            $table->text('lesiones')->nullable();
            $table->text('habitos')->nullable();
            $table->text('objetivos')->nullable(); 
            $table->string('genero');
            $table->date('day_of_birth');
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
        Schema::dropIfExists('user_fichas');
    }
}
