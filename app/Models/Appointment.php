<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency',
        'start_date',
        'notes',
    ];

    public function days(){
        return $this->hasMany(\App\Models\Day::class);
    }

    public function times(){
        return $this->hasMany(\App\Models\Time::class);
    }

}
