<div class="grid grid-cols-2 ">
    <div class="py-8 px-2 bg-white">
        <div class="flex justify-center">
            <h1 class="text-3xl p-4">Food Details</h1>
        </div>
        <div class="bg-gray-300 rounded shadow-lg py-6 m-4">

            <table class="py-2 px-4 col-span-2 text-left">
                <tr class="p-4">
                    <th class="p-4">id</th>
                    <th class="p-4">Name</th>
                    <th class="p-4">Api_name</th>
                    <th class="p-4">Actions</th>
                </tr>
                <tr class="py-4 hover:bg-gray-400 transition easein hover:text-white ">
                    <td class="px-4">1</td>
                    <td class="px-4">Beans</td>
                    <td class="px-4">beans</td>
                    <td class="px-4">
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">View</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Update</button>
                        <button type="button"
                            class="rounded-full my-2 my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Delete</button>

                    </td>

                </tr>
                <tr class="py-4 hover:bg-gray-400 transition easein hover:text-white ">

                    <td class="px-4">2</td>
                    <td class="px-4">Matooke</td>
                    <td class="px-4">fried Bananas</td>
                    <td class="px-4">
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">View</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Update</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Delete</button>

                    </td>

                </tr>
                <tr class="py-4 hover:bg-gray-400 transition easein hover:text-white ">

                    <td class="px-4">3</td>
                    <td class="px-4">Meat</td>
                    <td class="px-4">cows meat</td>
                    <td class="px-4">
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">View</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Update</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Delete</button>

                    </td>

                </tr>
                <tr class="py-4 hover:bg-gray-400 transition easein hover:text-white ">
                    <td class="px-4">1</td>
                    <td class="px-4">Greens</td>
                    <td class="px-4">Greens</td>
                    <td class="px-4">
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">View</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Update</button>
                        <button type="button"
                            class="rounded-full my-2 bg-gray-500 p-2 text-sm text-white hover:bg-gray-600 transition easein">Delete</button>

                    </td>

                </tr>
            </table>

        </div>
    </div>
    <div class="py-8 px-2 bg-white">
        <div class="flex justify-center">
            <h1 class="text-3xl p-4">Summury</h1>
        </div>
        <div class="bg-gray-300 rounded shadow-lg py-6 m-4">
            <div class=" food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right "><label class="text-right">Name:</label>
                </div>
                <div class="bg-white rounded-full p-2 col-span-6">
                    {{ $name }} @isset($name)
                        =>
                        @endisset{{ $api_name }}
                    </div>
                </div>

                <div class="food_detail_field">
                    <div class="py-2 px-4 col-span-2 text-right"><label class="">Category:</label></div>
                    <div class="bg-white rounded-full p-2 col-span-6">
                        @if ($breakfast == true)
                            <label class="uppercase px-1" for="breakfast">
                                Breakfast
                            </label>
                        @endif

                        @if ($lunch == true)
                            <label class="uppercase px-1" for="lunch">
                                Lunch
                            </label>
                        @endif
                        @if ($dinner == true)
                            <label class="uppercase px-1" for="dinner">
                                Dinner
                            </label>
                        @endif
                    </div>
                </div>
                <div class="food_detail_field">
                    <div class="py-2 px-4 col-span-2 text-right"><label class="">Part:</label></div>
                    <div class="bg-white rounded-full p-2 col-span-6">
                        @if ($main == true)
                            <label class="uppercase px-1" for="breakfast">Main</label>
                        @endif
                        @if ($sauce == true)
                            <label class="uppercase pr-1" for="breakfast">Sauce</label>
                        @endif
                        @if ($side == true)
                            <label class="uppercase px-1" for="breakfast">Side</label>
                        @endif
                    </div>
                </div>
                <div class="food_detail_field">
                    <div class="py-2 px-4 col-span-2 text-right"><label class="">Image:</label></div>
                    @if ($request_no != 0)
                        <img src="{{ url('images/food.jpg') }}"
                            class="w-full h-32 sm:h-48 object-cover col-span-6 rounded-xl" alt="Stew">
                    @else
                        <div class="m-2 cols-span-6" wire:loading.class='hidden' wire:target='sendData'>
                            <span class="p-1">No Data!</span>
                        </div>
                    @endif

                    <div class="food_detail_field" wire:loading wire:target='sendData'>
                        Loading ...
                    </div>

                </div>

                <div class="food_detail_field">
                    <div class="py- px-4 col-span-2 text-right"><label class="">Nutrients:</label></div>
                    <div class="bg-white rounded-xl p-2 col-span-6">

                        @if ($request_no != 0)
                            <div class="m-2">
                                <span class="p-1">Calories:</span>
                                <span class=" p-1 bg-red-100 rounded-full">123</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">Proteins:</span>
                                <span class=" p-1 bg-red-100 rounded-full">123</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">fat:</span>
                                <span class=" p-1 bg-red-100 rounded-full">123</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">Cabohydrates:</span>
                                <span class=" p-1 bg-red-100 rounded-full">123</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">Fibre:</span>
                                <span class=" p-1 bg-red-100 rounded-full">123</span>
                            </div>

                            <div class="flex justify-end">
                                <button class="text-gray-600 underline mr-4 hover:text-gray-900 transition easein"
                                    wire:click='viewRaw'>View raw
                                    form</button>
                            </div>
                        @else
                            <div class="m-2" wire:loading.class='hidden' wire:target='sendData'>
                                <span class="p-1">No Data!</span>

                            </div>
                        @endif

                        <div class="food_detail_field" wire:loading wire:target='sendData'>
                            Loading ...
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
