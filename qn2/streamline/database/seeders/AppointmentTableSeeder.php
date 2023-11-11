<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Support\Facades\App;

class AppointmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Patient::all()->each(function ($patient) {
            $patient->appointments()->saveMany(
                // patient shud have 5 appointments in the past and 2 in the future
                Appointment::factory()->count(5)->past()->make());
        });
        Patient::all()->each(function ($patient) {
            $patient->appointments()->saveMany(
                // patient shud have 5 appointments in the past and 2 in the future
                Appointment::factory()->count(2)->future()->make());
        });

    }
}
