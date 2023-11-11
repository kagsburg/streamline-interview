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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->nullable(false)->constrained('patients');
            $table->foreignId('attending')->nullable(false)->constrained('users');
            $table->foreignId('appointment_id')->nullable(false)->constrained('appointments');
            $table->string('symptoms', 255)->nullable(false);
            $table->string('diagnosis', 255)->nullable(true);
            $table->string('treatment', 255)->nullable(true);
            $table->string('prescription', 255)->nullable(true);
            $table->string('outcome', 255)->nullable(true);
            $table->integer('created_by')->nullable(false);
            $table->integer('updated_by')->nullable(true);

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
        Schema::dropIfExists('medical_records');
    }
};
