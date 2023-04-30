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
                <div class="col-span-3"><input wire:model.lazy='api_name' wire:keyup='checkAPIname' type="text"
                        class="p-2 rounded-full" placeholder="Enter api name to use...">
                    {{-- @error('addError') --}}
                    <span class="text-red-400">{{ $error }}</span>
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right"><label class="">Category:</label></div>
                <div class="bg-white rounded-full p-2 col-span-6 row-span-1">
                    @foreach ($categories as $category)
                        <input type="checkbox" class="p-2 rounded-full" value='{{ $category['id'] }}'
                            wire:model='selectedCategories'>
                        <label class="uppercase pr-1" for="breakfast">{{ $category['name'] }}</label>
                    @endforeach
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right"><label class="">Part:</label></div>
                <div class="bg-white rounded-full p-2 col-span-6">
                    @foreach ($parts as $part)
                        <input type="checkbox" class="p-2 rounded-full" value='{{ $part['id'] }}'
                            wire:model='selectedParts'>
                        <label class="uppercase pr-1" for="breakfast">{{ $part['name'] }}</label>
                    @endforeach
                </div>
            </div>
            <div class="food_detail_field">
                <div class="py-2 px-4 col-span-2 text-right"><label class="">Nutrients:</label></div>
                <div class=" bg-white rounded-full p-2 col-span-6">
                    <div class="flex justify-between">
                        <button wire:click='sendData' type="button"
                            class="rounded-full bg-gray-700 p-2 text-white  text-sm hover:bg-gray-600 transition easein">Send
                            Request</button>
                        <div type="button" class="rounded-full bg-gray-200 p-2 text-gray-700  text-sm">Requests:
                            {{ $request_no }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8 px-2 bg-white">
        <div class="flex justify-center">
            <h1 class="text-3xl p-4">Summary</h1>
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
                    <div class="bg-white rounded-full p-2 col-span-6 row-span-1">
                        @foreach ($categories as $category)
                            <input type="checkbox" class="p-2 rounded-full" value='{{ $category['id'] }}'
                                wire:model='selectedCategories' disabled>
                            <label class="uppercase pr-1" for="breakfast">{{ $category['name'] }}</label>
                        @endforeach
                    </div>
                </div>
                <div class="food_detail_field">
                    <div class="py-2 px-4 col-span-2 text-right"><label class="">Part:</label></div>
                    <div class="bg-white rounded-full p-2 col-span-6">
                        @foreach ($parts as $part)
                            <input type="checkbox" class="p-2 rounded-full" value='{{ $part['id'] }}'
                                wire:model='selectedParts' disabled>
                            <label class="uppercase pr-1" for="breakfast">{{ $part['name'] }}</label>
                        @endforeach
                    </div>
                </div>
                <div class="food_detail_field">
                    <div class="py-2 px-4 col-span-2 text-right"><label class="">Image:</label></div>
                    @if ($request_no != 0)
                        <img src="{{ $image }}" class="w-full h-32 sm:h-48 object-cover col-span-6 rounded-xl"
                            alt="Stew">
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
                                <span class=" p-1 bg-red-100 rounded-full">{{ $calories }}</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">Proteins:</span>
                                <span class=" p-1 bg-red-100 rounded-full">{{ $proteins }}</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">fat:</span>
                                <span class=" p-1 bg-red-100 rounded-full">{{ $fat }}</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">Cabohydrates:</span>
                                <span class=" p-1 bg-red-100 rounded-full">{{ $carbohydrates }}</span>
                            </div>
                            <div class="m-2">
                                <span class="p-1">Fibre:</span>
                                <span class=" p-1 bg-red-100 rounded-full">{{ $fibre }}</span>
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
                    @if ($error != null)
                        <button class="rounded-full bg-gray-700 mr-6 p-2 text-white hover:bg-gray-600 transition easein">
                            {{ $error }}
                        </button>
                    @else
                        @if ($request_no != 0)
                            <button type="button"
                                class="rounded-full bg-gray-700 mr-6 p-2 text-white hover:bg-gray-600 transition easein"
                                wire:click='saveFoodDetails'>Save
                                Data</button>
                        @else
                            <div class="m-2 cols-span-6" wire:loading.class='hidden' wire:target='sendData'>
                                <span class="p-1">No Data to save</span>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
