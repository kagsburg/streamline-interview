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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->nullable(false)->constrained('patients');
            $table->foreignId('user_id')->nullable(false)->constrained('users');
            $table->foreignId('appointment_status_id')->nullable(false)->constrained('appointment_status');
            $table->date('appointment_date')->nullable(false);
            $table->time('appointment_time')->nullable(false);
            $table->string('appointment_reason', 255)->nullable(false);
            $table->string('clinical_notes', 255)->nullable(true);
            $table->integer('created_by')->nullable(false);
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
        Schema::dropIfExists('appointments');
    }
};
