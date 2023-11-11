<?php

namespace Database\Seeders;

use App\Models\MedicalRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         MedicalRecord::all()->each(function ($medicalRecord) {
            $medicalRecord->labResults()->saveMany(\App\Models\LabResult::factory(5)->make());
        });
    }
}
