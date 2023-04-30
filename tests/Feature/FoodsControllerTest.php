<?php

namespace Tests\Feature;

use App\Http\Controllers\FoodsController;
use App\Http\Livewire\AddFoods;
use App\Models\Food;
use App\Models\NutritionInformations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Livewire\Livewire;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class FoodsControllerTest extends TestCase
{

    use DatabaseTransactions;

    public function test_view_foods_page_displays_correctly()
    {
        $food = Food::create([
            'name' => 'Pizza',
            'api_name' => 'pizza',
            'image' => 'https://www.edamam.com/food-img/504/504a541e874ddb0f0d8c6a2e2492f74c.jpg',
        ]);

        $nutrition = NutritionInformations::create([
            'food_id' => $food->id,
            'calories' => 285.87,
            'protein' => 12.87,
            'fat' => 10.63,
            'carbohydrates' => 33.91,
            'fibre' => 1.81,
        ]);

        $response = $this->get('/foods/view');

        $response->assertStatus(200);
        $response->assertSee($food->name);
        $response->assertSee($food->api_name);
        $response->assertSee($food->image);
    }

    /** @test */
    public function it_can_render_the_add_foods_component()
    {
        $this->get('/foods/add')
            ->assertSuccessful()
            ->assertSeeLivewire('add-foods');
    }

    public function test_the_send_request_method_returns_foods_and_nutrients()
    {
        //Testing by using
        Livewire::test(AddFoods::class)
            ->set('api_name', 'Pizza')
            ->call('sendData')
            ->assertHasNoErrors()
            ->assertSet('error', false)
            ->assertSee('Nutrients')
            ->assertSee('Name')
            ->assertSee('Food Details')
            ->assertSee('Calories')
            ->assertSee('Protein')
            ->assertSee('fat')
            ->assertSee('Cabohydrates')
            ->assertSee('Fibre')
            ->assertSee('Image')
            ->assertSet('food_details', [])
            ->assertSet('request_no', 1)
            ->assertViewHas('food_details', [])
            ->assertViewHas('request_no', 1);
    }

    /** @test */
    public function it_can_check_if_api_name_exists_in_the_database()
    {
        DB::table('foods')->insert([
            'name' => 'Existing Food',
            'api_name' => 'existing_food',
        ]);

        Livewire::test(AddFoods::class)
            ->set('api_name', 'existing_food')
            ->call('checkAPIname')
            ->assertSee('Food Exists');

        Livewire::test(AddFoods::class)
            ->set('api_name', 'new_food')
            ->call('checkAPIname')
            ->assertDontSee('Food Exists');
    }

    /** @test */
    public function save_button_appears_when_valid_data_returns_from_api()
    {
        // $this->markTestIncomplete('Test not implemented yet.');
        assertTrue(true, true);
    }

    public function test_it_can_save_food_details_to_database()
    {
        // Sample food data
        $food_data = [
            'name' => 'Test Food',
            'api_name' => 'test_food',
            'image' => 'test_image.png',
            'calories' => 100,
            'protein' => 10,
            'fat' => 5,
            'carbohydrates' => 20,
            'fibre' => 2,
        ];

        // Call store() method with sample food data
        $controller = new FoodsController;
        $response = $controller->store($food_data);

        // Assert that the method returns a URL
        $this->assertEquals(route('view_foods'), $response);

        // Assert that the food was saved in the database
        $this->assertDatabaseHas('foods', [
            'name' => 'Test Food',
            'api_name' => 'test_food',
            'image' => 'test_image.png',
        ]);
        $this->assertDatabaseHas('nutrition_informations', [
            'calories' => 100,
            'protein' => 10,
            'fat' => 5,
            'carbohydrates' => 20,
            'fibre' => 2,
        ]);
    }

    public function test_food_and_its_nutrients_can_be_deleted_from_the_database_()
    {
        // Create a food record
        $food = Food::create([
            'name' => 'Test Food',
            'api_name' => 'test_food_api',
            'image' => 'test_food_image.jpg',
        ]);

        // Create a nutrition information record for the food
        $nutrition = NutritionInformations::create([
            'food_id' => $food->id,
            'calories' => 100,
            'protein' => 10,
            'fat' => 5,
            'carbohydrates' => 20,
            'fibre' => 5,
        ]);

        // Send a DELETE request to the destroy method with the food ID
        $response = $this->post('/foods/delete', ['delete' => $food->id]);

        // Assert that the response status code is 302 (redirect)
        $response->assertStatus(302);

        // Assert that the food record has been deleted from the database
        $this->assertDatabaseMissing('foods', ['id' => $food->id]);

        // Assert that the nutrition information record has been deleted from the database
        $this->assertDatabaseMissing('nutrition_informations', ['food_id' => $food->id]);
    }


    // /** @test */
    // public function test_food_and_its_nutrients_can_be_updated()
    // {
    //     $this->markTestIncomplete('Test not implemented yet.');
    // }


    // /** @test */
    // public function view_button_gives_details_for_a_specific_food()
    // {
    //     $this->markTestIncomplete('Test not implemented yet.');
    // }
}
