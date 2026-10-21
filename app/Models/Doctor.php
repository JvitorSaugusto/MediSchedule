<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'specialty_id',
        'name',
        'crm',
        'phone',
        'work_start_time',
        'work_end_time',
        'slot_duration',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'specialty_id'    => 'integer',
            'is_active'       => 'boolean',
            'work_start_time' => 'datetime',
            'work_end_time'   => 'datetime',
            'slot_duration'   => 'integer',
        ];
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
