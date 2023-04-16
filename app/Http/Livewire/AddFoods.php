<?php

namespace App\Http\Livewire;

use App\Http\Controllers\FoodsController;
use Livewire\Component;

class AddFoods extends Component
{
    public $name;
    public $api_name;
    public $image;
    public $calories, $proteins, $fat, $carbohydrates, $fibre;
    public $request_no = 0;

    public $error;


    public $food_details = [];

    public function sendData()
    {
        $this->food_details = [];

        $foods = new FoodsController;

        $food = $foods->getNutrients($this->api_name);

        //Error Handler
        if ($food == 'No Data!') {
            $this->food_details = [];
            $food_nutrients = null;
            $this->image = null;
            $this->calories = null;
            $this->proteins = null;
            $this->fat = null;
            $this->carbohydrates = null;
            $this->fibre = null;
            return $this->error = 'Sorry, An error occured';
        } else {
            $this->error = false;

            $food_nutrients = $food['0'];
            $this->image = $food['1'];
            $this->calories = $food_nutrients['ENERC_KCAL'];
            $this->proteins = $food_nutrients['PROCNT'];
            $this->fat = $food_nutrients['FAT'];
            $this->carbohydrates = $food_nutrients['CHOCDF'];
            $this->fibre = $food_nutrients['FIBTG'];
        }



        $this->request_no++;

        return $food_nutrients;
    }

    public function saveFoodDetails()
    {
        dd:
        array_push(
            $this->food_details,
            [
                'name' => $this->name,
                'api_name' => $this->api_name,
                'image' => $this->image,
                'calories' => $this->calories,
                'protein' => $this->proteins,
                'fat' => $this->fat,
                'carbohydrates' => $this->carbohydrates,
                'fibre' => $this->fibre,
            ]
        );

        $foods = new FoodsController;
        $status = $foods->store($this->food_details['0']);

        return route('view_foods');
    }

    public function render()
    {
        return view('livewire.add-foods');
    }
}
