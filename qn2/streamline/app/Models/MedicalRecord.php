<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $table = 'medical_records';

    protected $fillable = [
        'patient_id',
        'attending ',
        'appointment_id',
        'symptoms',
        'diagnosis',
        'treatment',
        'prescription',
        'outcome',
        'created_by',
        'updated_by',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function attending()
    {
        return $this->belongsTo(User::class);
    }

    public function labResults()
    {
        return $this->hasMany(LabResult::class);
    }


}
