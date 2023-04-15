<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    @livewireStyles()
</head>

<body class="bg-gray-100 h-full">
    <div class="grid grid-cols-10 h-full">
        <div class="pt-4 bg-gray-900 col-span-2 h-full "></div>
        <div class="pt-4 bg-gray-900 col-span-2 h-full fixed z-10">
            <h1 class="mx-6 text-3xl text-white">Food Nutrients</h1>
            <nav>
                <ul class="grid mt-6">
                    <a href="/foods/view"
                        class="rounded-l-full text-white p-4 hover:bg-white hover:text-gray-900 transition easein">
                        <li class="">Home</li>
                    </a>
                    <a href="/foods/add"
                        class="rounded-l-full text-white p-4 hover:bg-white hover:text-gray-900 transition easein">
                        <li class="">Add Food</li>
                    </a>
                    <a href="/"
                        class="rounded-l-full text-white p-4 hover:bg-white hover:text-gray-900 transition easein">
                        <li class="">Exit</li>
                    </a>
                </ul>
            </nav>
        </div>
        <div class="bg-white col-span-8 flex flex-col h-full">
            <header class="bg-gray-700 flex justify-start h-16 fixed w-full z-10 top-0">
                <h1 class="p-6 text-white text-xl">@yield('header-heading')</h1>
            </header>
            <div class="overflow-y-auto mt-16">
                @yield('main')
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
