<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LabResult;
use App\Models\LabTest;
use App\Models\User;
use App\Models\MedicalRecord;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LabResult>
 */
class LabResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = LabResult::class;
    public function definition()
    {
        $lab_id = User::where('role_id', 4)->get()->random()->id;
        $doctor_id = User::where('role_id', 2)->get()->random()->id;
        $record_id = MedicalRecord::all()->random()->id;
        $lab_test_id =LabTest::all()->random()->id;
        return [
            'lab_test_id' => $lab_test_id,
            'medical_record_id' => $record_id,
            'result' => $this->faker->realText(50),
            'lab_notes' => $this->faker->realText(50),
            'created_by' => $doctor_id,
            'updated_by' => $lab_id,
        ];
    }
}
