<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    //Declare variables
    public $count = 1;

    //Create functions for the action
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter', ['counter' => $this->count]);
        //If the variable is no defined publicly, you ,must pass it into the view
        // return view('livewire.counter', ['counter' => $this->count]);
    }
}
