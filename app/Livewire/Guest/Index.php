<?php

namespace App\Livewire\Guest;


use App\Models\Page;
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
            // Remove day if already selected
            $this->days = array_filter($this->days, fn($d) => $d !== $day);
        } else {
            // Add day if not selected
            $this->days[] = $day;
        }
    }


    public function render()
    {
        return view('livewire.guest.index');
    }
}
