<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResult extends Model
{
    use HasFactory;

    protected $table = 'tests_results';

    protected $fillable = [
        'lab_test_id',
        'medical_record_id',
        'result',
        'lab_notes',
        'created_by',
        'updated_by',
    ];

    public function labTest()
    {
        return $this->belongsTo(LabTest::class);
    }

    public function medicalRecord()
    {
        return $this->belongsTo(MedicalRecord::class);
    }
}
