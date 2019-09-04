<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFitnessEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fitness_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('fitness_active_id');
            $table->string('fitness_objetive_id');
            $table->text('condition_id')->nullable();
            $table->text('diet_nutrition_id')->nullable();
            $table->text('functional_training_id')->nullable();
            $table->text('health_conditions_id')->nullable();
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
        Schema::dropIfExists('user_fitness_evaluations');
    }
}
