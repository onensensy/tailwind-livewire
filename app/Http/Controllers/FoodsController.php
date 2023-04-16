<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Edamam\Api\FoodDatabase\FoodDatabase;
use \Edamam\Api\FoodDatabase\FoodRequest;

class FoodsController extends Controller
{

    /**
     * Retrieve food nutrients
     * @param $food_api_name
     * @return $result
     */
    public function getNutrients($food_api_name)
    {
        FoodDatabase::setApiCredentials('974445c8', '278dce0393f8a92b0db4094b85e3af49');
        $data1 = FoodRequest::find(['ingredient' => $food_api_name])->results();
        $result = json_decode($data1[0]->nutrients);

        return $result;
    }

    /**
     * Add food to database
     * @param $food_data:array
     * @return True
     */
    public function save(Food $food, $food_data)
    {
    }

    /**
     * Delete food from Database
     * @param $id
     * @return True
     */
    public function destroy($id)
    {
    }
}
