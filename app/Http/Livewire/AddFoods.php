<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddFoods extends Component
{
    public $name;
    public $api_name;
    public $breakfast, $lunch, $dinner;
    public $main, $sauce, $side;

    public function sendData()
    {
        dd($this->name, $this->breakfast);
    }

    /**
     * View Raw format of the data received
     */
    public function viewRaw(Type $var = null)
    {
        # code...
    }



    public function render()
    {
        return view('livewire.add-foods');
    }
}
