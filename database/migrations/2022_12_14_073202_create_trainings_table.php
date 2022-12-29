<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();

            $table->date('training_date')->nullable();
            $table->date('travel_date')->nullable();
            $table->date('training_expiration_date')->nullable();
            $table->string('servant_name')->nullable();
            $table->string('training_type')->nullable();
            $table->string('place')->nullable();
            $table->string('assistant_name')->nullable();

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
        Schema::dropIfExists('trainings');
    }
};
