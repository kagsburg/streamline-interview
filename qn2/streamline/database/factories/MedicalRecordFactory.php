<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\User;
use App\Models\Appointment;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalRecord>
 */
class MedicalRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $patient = Patient::all()->random();
        $user = User::all()->random();
        // get appointment id from appointment table where patient id is equal to patient id and date is equal to today date or less than today date
        $appointment = Appointment::where('patient_id', $patient->id)->whereDate('appointment_date', '<=', Carbon::today())->get()->random();
        return [
            // i want to create a medical record for a patient
            'patient_id'=> $patient->id,  
            'attending'=> $user->id,
            'appointment_id'=> $appointment->id,
            'symptoms'=> $this->faker->realText(50),
            'diagnosis'=> $this->faker->realText(50),
            'treatment'=> $this->faker->realText(50),
            'prescription'=> $this->faker->realText(50),
            'outcome'=> $this->faker->realText(50),
            'created_by'=> $this->faker->numberBetween(1, 10),
        ];
    }
}
