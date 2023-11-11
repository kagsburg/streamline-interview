<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AppointmentStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // 
        $this->call([
            RolesTableSeeder::class,
            AppointmentStatusTableSeeder::class,
            UsersTableSeeder::class,
            LabTableSeeder::class,
            PatientsTableSeeder::class,
            AppointmentTableSeeder::class,
            MedicalTableSeeder::class,
            LabResultsTableSeeder::class,
        ]);
        
    }
}
