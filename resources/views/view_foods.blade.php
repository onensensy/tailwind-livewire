@extends('layout')

@section('title', 'Add Foods')

@section('header-heading', 'Manage Foods')

@section('main')

    <div class="grid ">
        <div class="py-8 px-2 bg-white">
            <div class="flex justify-center">
                <h1 class="text-3xl p-4">Food Details</h1>
            </div>
            <div class="bg-gray-100 rounded shadow-lg py-6 m-6">

                <table class="py-2 px-4 mx-8 col-span-2 text-left  border-b border-b-10 border-red-200">
                    <tr class="p-4 m-4 border-b border-b-10 border-red-200">
                        <th class="px-4">ID</th>
                        <th class="px-4">NAME</th>
                        <th class="px-4">API NAME</th>
                        <th class="px-4">IMAGE</th>
                        <th class="px-4">NUTRIENTS</th>
                        <th class="px-4">ACTIONS</th>
                    </tr>
                    @foreach ($foods as $food)
                        <tr class=" py-4 hover:bg-gray-50 transition easein border-b border-b-10 border-red-200">
                            <td class="px-4">{{ $food['id'] }}</td>
                            <td class="px-4">{{ $food['name'] }}</td>
                            <td class="px-4">{{ $food['api_name'] }}</td>
                            <td class="px-4"><img src="{{ $food['image'] }}"
                                    class="m-4 w-full h-full sm:h-48 object-cover col-span-6 rounded-xl" alt="Stew">
                            </td>
                            @foreach ($nutrients as $nutrient)
                                @if ($nutrient['food_id'] == $food['id'])
                                    <td class=" flex items-center px-4 ">
                                        <div class="m-2">
                                            <span class="p-1">Cal:</span>
                                            <span class=" p-1 bg-red-100 rounded-full">{{ $nutrient['calories'] }}</span>
                                        </div>
                                        <div class="m-2">
                                            <span class="p-1">Prot:</span>
                                            <span class=" p-1 bg-red-100 rounded-full">{{ $nutrient['protein'] }}</span>
                                        </div>
                                        <div class="m-2">
                                            <span class="p-1">Fat:</span>
                                            <span class=" p-1 bg-red-100 rounded-full">{{ $nutrient['calories'] }}</span>
                                        </div>
                                        <div class="m-2">
                                            <span class="p-1">Cabs:</span>
                                            <span class=" p-1 bg-red-100 rounded-full">{{ $nutrient['calories'] }}</span>
                                        </div>
                                        <div class="m-2">
                                            <span class="p-1">Fibre:</span>
                                            <span class=" p-1 bg-red-100 rounded-full">{{ $nutrient['calories'] }}</span>
                                        </div>
                                    </td>
                                @endif
                            @endforeach
                            <td class="px-4">
                                <button type="button"
                                    class="rounded-full my-2 bg-gray-600 p-2 text-sm text-white hover:bg-gray-700 transition easein"
                                    wire:click='viewData'>View</button><br>
                                <button type="button"
                                    class="rounded-full my-2 bg-gray-600 p-2 text-sm text-white hover:bg-gray-700 transition easein">Update</button><br>
                                <form action="delete" method="post">
                                    @csrf
                                    <input type="text" value="{{ $food['id'] }}" name="delete" hidden>
                                    <button type="submit"
                                        class="rounded-full my-2 my-2 bg-gray-600 p-2 text-sm text-white hover:bg-gray-700 transition easein">Delete</button><br>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </table>

            </div>
        </div>

    </div>

@endsection
