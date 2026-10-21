<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_date',
        'status',
        'notes',
        'canceled_at',
    ];

    protected function casts(): array
    {
        return [
            'patient_id'       => 'integer',
            'doctor_id'        => 'integer',
            'appointment_date' => 'datetime',
            'canceled_at'      => 'datetime',
        ];
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    
    public function partient()
    {
        return $this->belongsTo(User::class, 'patient_id')->where('status', 'patient');
    }
}
