<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Patient::class;
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'contact' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail,
            'address'=>$this->faker->address(40),
            'gender'=> $this->faker->randomElement(['male', 'female']),
            'dob'=> $this->faker->date(),
            'blood_group'=> $this->faker->randomElement(['O', 'A', 'B', 'AB']),
            'next_of_kin'=> $this->faker->name(),
            'next_of_kin_contact'=> $this->faker->phoneNumber(),
            'occupation'=> $this->faker->jobTitle(),
            'marital_status'=> $this->faker->randomElement(['single', 'married', 'divorced', 'widowed']),
            'created_by'=> $this->faker->numberBetween(1, 10),
        ];
    }

    
}
