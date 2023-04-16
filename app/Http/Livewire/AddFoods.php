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


    public $food = [];

    public function sendData()
    {
        $foods = new FoodsController;

        $food = $foods->getNutrients($this->api_name);
        $food_nutrients = $food['0'];

        $this->image = $food['1'];
        $this->calories = $food_nutrients['ENERC_KCAL'];
        $this->proteins = $food_nutrients['PROCNT'];
        $this->fat = $food_nutrients['FAT'];
        $this->carbohydrates = $food_nutrients['CHOCDF'];
        $this->fibre = $food_nutrients['FIBTG'];


        $this->request_no++;

        return $food_nutrients;
    }

    public function store()
    {
        array_push(
            $this->food,
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

        // $status = FoodsController::store($this->food);
        return $status;
    }

    public function render()
    {
        return view('livewire.add-foods');
    }
}
