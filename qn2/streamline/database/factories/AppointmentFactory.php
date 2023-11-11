<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Appointment::class;
    public function definition()
    {
        $patient = Patient::all()->random();
        $user = User::all()->random();
        return [
            'patient_id' => $patient->id,
            'user_id' => $user->id,
            'appointment_status_id' => $this->faker->numberBetween(1, 5),
            // 'appointment_date' => $this->faker->,
            'appointment_time' => $this->faker->time(),
            'appointment_reason' => $this->faker->realText(50),
            'clinical_notes' => $this->faker->realText(50),
            'created_by' => $this->faker->numberBetween(1, 5),

        ];
    }
    //function to allocate date to appointment
    public function past(){
        // patient should have five dates in the past 
        return $this->state(function (array $attributes) {
            return [
                'appointment_date' => Carbon::now()->subDays(random_int(1, 30)),
            ];
        });
    }
    public function future()
    {
        return $this->state(function (array $attributes) {
            return [
                'appointment_date' => Carbon::now()->addDays(random_int(1, 30)),
            ];
        });
    }
}
