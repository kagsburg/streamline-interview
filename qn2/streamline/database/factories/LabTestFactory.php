<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LabTest>
 */
class LabTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->unique()->randomElement(['Malaria test', 'Blood Grouping', 'Lipid profile','Fasting Blood Sugar','HIV Antibody screening
            ']),
            'description' => $this->faker->realText(50),
        ];
    
    }
}
