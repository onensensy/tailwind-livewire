<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewFoods extends Component
{

    public $name = 'Beans';
    public $api_name = 'beans';
    public $food_id = '1';
    public $breakfast, $lunch = true, $dinner = true;
    public $main, $sauce = true, $side = true;
    public $request_no = 0;

    public $view = false;

    public $dummy = 0;

    public function viewData()
    {
        $this->view = true;
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
        return view('livewire.view-foods');
    }
}
