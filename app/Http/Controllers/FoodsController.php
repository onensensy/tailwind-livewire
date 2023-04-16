<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\NutritionInformations;
use Illuminate\Http\Request;
use Edamam\Api\FoodDatabase\FoodDatabase;
use \Edamam\Api\FoodDatabase\FoodRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class FoodsController extends Controller
{

    /**
     * Retrieve food nutrients
     * @param $food_api_name
     * @return $result
     */
    public function getNutrients($food_api_name)
    {

        try {
            FoodDatabase::setApiCredentials('974445c8', '278dce0393f8a92b0db4094b85e3af49');
            $data1 = FoodRequest::find(['ingredient' => $food_api_name])->results()->first()->toArray();
        } catch (\Throwable $th) {
            return 'No Data!';
        }

        $image = $data1['image'];
        $food_nutrients = $data1['nutrients'];
        $nutrients = json_decode($food_nutrients, true);

        return [$nutrients, $image];
    }

    /**
     * Add food to database
     * @param $food_data:array
     * @return True
     */
    public function store($food_data)
    {
        DB::transaction(function () use ($food_data) {

            // dd($food_data);
            $food = Food::create([
                'name' => $food_data['name'],
                'api_name' => $food_data['api_name'],
                'image' => $food_data['image'],
            ]);
            try {
                $nutrition = NutritionInformations::create([
                    'food_id' => $food->id,
                    'calories' => $food_data['calories'],
                    'protein' => $food_data['protein'],
                    'fat' => $food_data['fat'],
                    'carbohydrates' => $food_data['carbohydrates'],
                    'fibre' => $food_data['fibre'],
                ]);
            } catch (QueryException $e) {
                $errorCode = $e->getCode();
                $errorMessage = $e->getMessage();

                if ($errorCode == '23000') {
                    return 'SQL error: Duplicate Entry[This API name already has a database value]';
                } else {
                    return 'Error: ' . $errorMessage;
                }
            }
        });

        return route('view_foods');
        // return 'Success';
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
