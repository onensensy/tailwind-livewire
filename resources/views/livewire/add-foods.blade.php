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
                        placeholder="Enter the name of the food..." wire:model.lazy='name'>
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right "><label class="text-right">API val:</label>
                </div>
                <div class="col-span-3"><input type="text" class="p-2 rounded-full"
                        placeholder="Enter api name to use..." wire:model.lazy='api_name'>
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right"><label class="">Category:</label></div>
                <div class="bg-white rounded-full p-2 col-span-6 row-span-1">
                    <input type="checkbox" class="p-2 rounded-full"placeholder="Enter the name of the food..."
                        wire:model='breakfast'>
                    <label class="uppercase pr-1" for="breakfast">Breakfast</label>
                    <input type="checkbox" class="p-2 rounded-full"placeholder="Enter the name of the food..."
                        wire:model='lunch'>
                    <label class="uppercase px-1" for="breakfast">Lunch</label>
                    <input type="checkbox" class="p-2 rounded-full"placeholder="Enter the name of the food..."
                        wire:model='dinner'>
                    <label class="uppercase pr-1" for="breakfast">Dinner</label>
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right"><label class="">Part:</label></div>
                <div class="bg-white rounded-full p-2 col-span-6">
                    <input type="checkbox" class="p-2 rounded-full" placeholder="Enter the name of the food..."
                        wire:model='main'>
                    <label class="uppercase pr-1" for="breakfast">Main</label>
                    <input type="checkbox" class="p-2 rounded-full"placeholder="Enter the name of the food..."
                        wire:model='sauce'>
                    <label class="uppercase px-1" for="breakfast">Sauce</label>
                    <input type="checkbox" class="p-2 rounded-full"placeholder="Enter the name of the food..."
                        wire:model='side'>
                    <label class="uppercase pr-1" for="breakfast">Side</label>
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right"><label class="">Nutrients:</label></div>
                <div class=" bg-white rounded-full p-2 col-span-6">
                    <div class="flex justify-between">
                        <button type="button"
                            class="rounded-full bg-gray-700 p-2 text-white  text-sm hover:bg-gray-600 transition easein"
                            wire:click='sendData'>Send Request</button>
                        <div type="button" class="rounded-full bg-gray-200 p-2 text-gray-700  text-sm"
                            wire:click='sendData'>Requests: {{ $request_no }}</div>
                    </div>
                </div>
            </div>

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

                <div class="flex justify-end  items-center p-4">

                    <button type="button"
                        class="rounded-full bg-gray-700 mr-6 p-2 text-white hover:bg-gray-600 transition easein">Save
                        Data</button>
                </div>
            </div>
        </div>
    </div>
