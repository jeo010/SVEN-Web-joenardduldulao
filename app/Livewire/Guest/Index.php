<?php

namespace App\Livewire\Guest;


use App\Models\Appointment;
use App\Models\Day;
use App\Models\Time;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;


class Index extends Component
{

    public $frequency = "recurring";
    public $start_date;
    public $days = [];
    public $times = [];
    public $notes;
    public $success = false;

    public function rules()
    {
        return [
            'frequency'   => 'required|in:recurring,one-time',
            'start_date'  => 'required|date|after_or_equal:today',
            'days'        => 'required',
            'days.*'      => 'in:Mon,Tue,Wed,Thu,Fri,Sat,Sun',
            'times'       => 'required',
            'times.*'     => 'in:Morning,Afternoon,Evening',
            'notes'       => 'nullable',
        ];
    }

    public function mount()
    {
        //dd('pawtastic');
    }

    public function changeFrequency($selected_frequency){
        $this->frequency = $selected_frequency;
    }

    public function toggleDay($day)
    {
        if (in_array($day, $this->days)) {
            $this->days = array_filter($this->days, fn($d) => $d !== $day);
        } else {
            $this->days[] = $day;
        }
    }

    public function toggleTime($time)
    {
        if (in_array($time, $this->times)) {
            $this->times = array_filter($this->times, fn($t) => $t !== $time);
        } else {
            $this->times[] = $time;
        }
    }

    public function store(){

        $this->validate();

        $appointment = Appointment::create([
            'frequency' => $this->frequency,
            'start_date' => $this->start_date,
            'notes' => $this->notes,
        ]);

        foreach($this->days as $day){
            $days = Day::create([
                'appointment_id' => $appointment->id,
                'day' => $day,
            ]);
        }

        foreach($this->times as $time){
            $times = Time::create([
                'appointment_id' => $appointment->id,
                'time' => $time,
            ]);
        }

        $this->frequency = "recurring";
        $this->start_date = null;
        $this->days = [];
        $this->times = [];
        $this->notes = null;

        $this->dispatch('saved');

    }


    public function render()
    {
        return view('livewire.guest.index');
    }
}
