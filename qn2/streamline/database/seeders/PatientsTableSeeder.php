<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\MedicalRecord;
class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Patient::factory(10)
        // ->create();
        // lets use chunk to reduce memory usage
        $faker = \Faker\Factory::create();
        $data=[];

        for ($i=0; $i <10000;$i++){            
            $data[]=[
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'contact' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail,
                'address'=>$faker->address(40),
                'gender'=> $faker->randomElement(['male', 'female']),
                'dob'=> $faker->date(),
                'blood_group'=> $faker->randomElement(['O', 'A', 'B', 'AB']),
                'next_of_kin'=> $faker->name(),
                'next_of_kin_contact'=> $faker->phoneNumber(),
                'occupation'=> $faker->jobTitle(),
                'marital_status'=> $faker->randomElement(['single', 'married', 'divorced', 'widowed']),
                'created_by'=> $faker->numberBetween(1, 10),
            ];
        }
        foreach(array_chunk($data,1000) as $data){
            Patient::insert($data);
        }
        // Patient::chunk(1000, function ($patients) {
        //     foreach ($patients as $patient) {
        //         $appointment = Appointment::factory()->create([
        //             'patient_id' => $patient->id,
        //         ]);
        //         $medicalRecord = MedicalRecord::factory()->create([
        //             'patient_id' => $patient->id,
        //             'appointment_id' => $appointment->id,
        //         ]);
        //     }
        // });
    }
}
