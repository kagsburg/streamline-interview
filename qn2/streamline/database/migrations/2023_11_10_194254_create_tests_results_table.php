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
        Schema::create('tests_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lab_test_id')->nullable(false)->constrained('lab_tests');
            $table->foreignId('medical_record_id')->nullable(false)->constrained('medical_records');
            $table->string('result', 255)->nullable(true);
            $table->string('lab_notes', 255)->nullable(true);
            $table->integer('created_by')->nullable(false);
            $table->integer('updated_by')->nullable(false);
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
        Schema::dropIfExists('tests_results');
    }
};
