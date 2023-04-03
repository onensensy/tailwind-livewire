<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddFoods extends Component
{
    public $name;
    public $api_name;
    public $breakfast, $lunch, $dinner;
    public $main, $sauce, $side;
    public $request_no = 0;

    public $dummy = 0;

    public function sendData()
    {
        do {
            $this->dummy++;
        } while ($this->dummy <= 50000000);
        $this->request_no++;

        $this->dummy = 0;
    }

    /**
     * View Raw format of the data received
     */
    public function viewRaw()
    {
        dd('Raw Response view: True');
    }



    public function render()
    {
        return view('livewire.add-foods');
    }
}
