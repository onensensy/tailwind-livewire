<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add foods</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <div class="grid grid-cols-10">
        <div class=" p-4 bg-gray-900 col-span-2">
            <h1 class="text-2xl text-white">Supa Meal Planner</h1>
            <nav class="mt-6">
                <ul>
                    <li class="text-white">Home</li>
                    <li class="text-white">Exit</li>

                </ul>
            </nav>
        </div>
        <div class=" bg-red-700 col-span-8">
            <header class="bg-gray-700 flex justify-start">
                <h1 class=" p-6 text-white text-xl">Add Foods</h1>
            </header>
            <div class="grid grid-cols-2 ">
                <div class="py-8 px-2 bg-white">
                    <div class="flex justify-center">
                        <h1 class="text-3xl p-4">Food Details</h1>
                    </div>
                    <div class="bg-gray-300 rounded shadow-lg py-6 m-4">
                        <div class=" food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right "><label class="text-right">Name:</label>
                            </div>
                            <div class="col-span-3"><input type="text" class="p-2 rounded-full"
                                    placeholder="Enter the name of the food...">
                            </div>
                        </div>
                        <div class="food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right "><label class="text-right">API val:</label>
                            </div>
                            <div class="col-span-3"><input type="text" class="p-2 rounded-full"
                                    placeholder="Enter api name to use...">
                            </div>
                        </div>
                        <div class="food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right"><label class="">Category:</label></div>
                            <div class="bg-white rounded-full p-2 col-span-6">
                                <input type="checkbox"
                                    class="p-2 rounded-full"placeholder="Enter the name of the food...">
                                <label class="uppercase pr-1" for="breakfast">Breakfast</label>
                                <input type="checkbox"
                                    class="p-2 rounded-full"placeholder="Enter the name of the food...">
                                <label class="uppercase px-1" for="breakfast">Lunch</label>
                                <input type="checkbox"
                                    class="p-2 rounded-full"placeholder="Enter the name of the food...">
                                <label class="uppercase pr-1" for="breakfast">Dinner</label>
                            </div>
                        </div>
                        <div class="food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right"><label class="">Part:</label></div>
                            <div class="bg-white rounded-full p-2 col-span-6">
                                <input type="checkbox" class="p-2 rounded-full"
                                    placeholder="Enter the name of the food...">
                                <label class="uppercase pr-1" for="breakfast">Main</label>
                                <input type="checkbox"
                                    class="p-2 rounded-full"placeholder="Enter the name of the food...">
                                <label class="uppercase px-1" for="breakfast">Sauce</label>
                                <input type="checkbox"
                                    class="p-2 rounded-full"placeholder="Enter the name of the food...">
                                <label class="uppercase pr-1" for="breakfast">Side</label>
                            </div>
                        </div>
                        <div class="flex justify-end p-4">
                            <button type="button"
                                class="rounded-full bg-gray-700 mr-6 p-2 text-white hover:bg-gray-600 transition easein">Send
                                Data</button>
                        </div>
                    </div>
                </div>

                <div class="py-8 px-2 bg-white">
                    <div class="flex justify-center">
                        <h1 class="text-3xl p-4">Nutritional Info</h1>
                    </div>
                    <div class="bg-gray-300 rounded shadow-lg py-6 m-4">
                        <div class=" food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right "><label class="text-right">Name:</label>
                            </div>
                            <div class=""><input type="text" class="p-2 rounded-full" value="Beans => beans"
                                    readonly>
                            </div>
                        </div>
                        <div class="food_detail_field">
                            <div class="py- px-4 col-span-2 text-right"><label class="">Nutrients:</label></div>
                            <div class="bg-white rounded-xl p-2 col-span-6">
                                <div class="m-2">
                                    <span class="p-1">Calories:</span>
                                    <span class=" p-1 bg-red-100 rounded-full">123</span>
                                </div>
                                <div class="m-2">
                                    <span class="p-1">Proteins:</span>
                                    <span class=" p-1 bg-red-100 rounded-full">123</span>
                                </div>
                                <div class="m-2">
                                    <span class="p-1">Carbohydrates:</span>
                                    <span class=" p-1 bg-red-100 rounded-full">123</span>
                                </div>
                                <div class="m-2">
                                    <span class="p-1">Vitamins:</span>
                                    <span class=" p-1 bg-red-100 rounded-full">123</span>
                                </div>
                                <div class="m-2">
                                    <span class="p-1">Proteins:</span>
                                    <span class=" p-1 bg-red-100 rounded-full">123</span>
                                </div>

                            </div>
                        </div>
                        <div class="food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right"><label class="">Category:</label></div>
                            <div class="bg-white rounded-full p-2 col-span-6">



                                <label class="uppercase px-1" for="breakfast">Lunch</label>,

                                <label class="uppercase pr-1" for="breakfast">Dinner</label>
                            </div>
                        </div>
                        <div class="food_detail_field">
                            <div class="py-2 px-4 col-span-2 text-right"><label class="">Part:</label></div>
                            <div class="bg-white rounded-full p-2 col-span-6">
                                <label class="uppercase px-1" for="breakfast">Sauce</label>,
                                <label class="uppercase pr-1" for="breakfast">Side</label>
                            </div>
                        </div>
                        <div class="flex justify-end  items-center p-4">
                            <button class="text-gray-600 underline mr-4 hover:text-gray-900 transition easein">View
                                raw
                                form</button>
                            <button type="button"
                                class="rounded-full bg-gray-700 mr-6 p-2 text-white hover:bg-gray-600 transition easein">Save
                                Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
