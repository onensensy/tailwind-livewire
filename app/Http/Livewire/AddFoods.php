<?php

namespace App\Http\Livewire;

use App\Http\Controllers\FoodsController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddFoods extends Component
{
    public $name;
    public $api_name;
    public $image;
    public $calories, $proteins, $fat, $carbohydrates, $fibre;
    public $request_no = 0;

    public $parts = [
        ['id' => 1, 'name' => 'Main'],
        ['id' => 2, 'name' => 'Sauce'],
        ['id' => 3, 'name' => 'Side'],
    ], $categories = [
        ['id' => 1, 'name' => 'Breakfast'],
        ['id' => 2, 'name' => 'Lunch'],
        ['id' => 3, 'name' => 'Dinner'],
    ];

    public $selectedParts = [];
    public $selectedCategories = [];
    public $error;

    public function checkAPIname()
    {

        $wordExists = DB::table('foods')->where('api_name', $this->api_name)->exists();


        if ($wordExists == true) {
            $this->error = 'Food Exists';
        } else {
            $this->resetErrorBag('api_name');
        }
        // dd('OK');
    }

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

        // return $food_nutrients;
    }

    public function saveFoodDetails()
    {
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
                'parts' => $this->selectedParts,
                'categories' => $this->selectedCategories
            ]
        );

        $foods = new FoodsController;
        $status = $foods->store($this->food_details['0']);

        return redirect()->to('/foods/view');
    }

    public function render()
    {
        return view('livewire.add-foods');
    }
}
