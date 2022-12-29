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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();

            $table->date('holiday_date')->nullable();
            $table->string('servant_name')->nullable();
            $table->string('holiday_type')->nullable();
            $table->string('holiday_days')->nullable();
            $table->date('holiday_start_date')->nullable();
            $table->date('holiday_expiration_date')->nullable();
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
        Schema::dropIfExists('holidays');
    }
};
