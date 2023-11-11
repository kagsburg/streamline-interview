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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50)->nullable(false);
            $table->string('last_name', 50)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('contact', 50)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('gender', 50)->nullable(false);
            $table->date('dob')->nullable(false);
            $table->string('blood_group', 50)->nullable(true);
            $table->string('next_of_kin', 100)->nullable(true);
            $table->string('next_of_kin_contact', 50)->nullable(true);
            $table->string('occupation', 255)->nullable(true);
            $table->string('marital_status', 150)->nullable(true);
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
        Schema::dropIfExists('patients');
    }
};
