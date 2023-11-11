<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'patient_id',
        'user_id',
        'appointment_date',
        'appointment_time',
        'clinical_notes',
        'appointment_status_id',
        'created_by',
        'updated_by',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function appointmentStatus()
    {
        return $this->belongsTo(AppointmentStatus::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
