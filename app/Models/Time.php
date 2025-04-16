<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'time',
    ];

    public function appointment(){
        return $this->belongsTo(\App\Models\Appointment::class);
    }

}
