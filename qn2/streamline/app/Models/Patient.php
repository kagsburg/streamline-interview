<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact',
        'email',
        'address',
        'gender',
        'dob',
        'blood_group',
        'next_of_kin',
        'next_of_kin_contact',
        'occupation',
        'marital_status',
        'created_by',
        'updated_by',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
