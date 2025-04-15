<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'day',
    ];

    public function appointment(){
        return $this->belongsTo(\App\Models\Appointment::class);
    }

}
