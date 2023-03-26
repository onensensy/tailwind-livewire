<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud With Livewire and Tailwind css</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class=""> {{-- Body Div --}}
        <div class="flex p-4 pl-8 justify-between items-center text bg-gray-700 text-white">
            <div class="text-6xl">Logo</div>
            <nav>
                <div class="flex">
                    <div class="md:hidden">Menu</div>
                    <ul class="flex gap-10 pl">
                        <li>Home</li>
                        <li>Add</li>
                        <li>Update</li>
                        <li>Delete</li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class=""> {{-- Main contents --}}
            <div class=" flex m-6 justify-center">
                <div class="flex p-6 justify-start items-center gap-6 rounded-full bg-gray-300 text-dark">
                    <form action="/crud/add" method="POST">
                        @csrf
                        <input class="rounded-full bg-white p-2" name="post">
                        <button type="submit"
                            class=" rounded-full bg-gray-700 p-2 text-white hover:bg-gray-600 ">Add</button>
                    </form>
                </div>
            </div>
            <div class="flex m-6 p-4 justify-center ">

                <table class="flex p-4 bg-gray-300 border-4 border-gray-400">
                    <tr class="font-bold border-b-4">
                        <td class="p-2">No.</td>
                        <td class="p-2">Item</td>
                        <td class="p-2">Added At</td>
                    </tr>
                    @if ($count < 0)
                        <tr>
                            <td class="p-2 col-span-3">No data Yet</td>

                        </tr>
                    @else
                        @foreach ($posts as $post)
                            <tr>
                                <td class="p-2">{{ $post->id }}</td>
                                <td class="p-2">{{ $post->post }}</td>
                                <td class="p-2">{{ $post->created_at }}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</body>

</html>
