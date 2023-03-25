<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tailwind</title>
</head>

<body class="text-gray-600 ">
    <div class="grid md:grid-cols-3"> {{-- Content Wrapper --}}
        <div class="md:col-span-1 md:flex md:justify-end">
            <nav class="text-right">
                <div>
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                        {{-- <a href="/index" class="text-green-500 sm:text-red-500 lg:text-blue-500 "> Food Ninja</a> --}}
                        {{-- <a href="/index" class="text-sm mb:text-xl"> Food Ninja</a> --}}
                        <a href="/index" class="hover:text-red-700"> Food Ninja</a>
                    </h1>
                </div>

                <ul class="text-sm  mt-6">
                    <li class="py-1 text-gray-700 font-bold border-r-4 border-primary">
                        <a class="px-8 flex justify-end" href="#">
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="py-1 text-gray-700 font-bold border-r-4 border-white">

                        <a class="px-8 flex justify-end" href="#">

                            <span>ABOUT</span>
                        </a>
                    </li>
                    <li class="py-1 text-gray-700 font-bold border-r-4 border-white">

                        <a class="px-8 flex justify-end" href="#">

                            <span>CONTACT</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>{{-- End nav --}}

        <main class="px-16 py-6 bg-gray-100 md:col-span-2">
            <div class="flex justify-center md:justify-end">
                <a href="#"
                    class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white">Login</a>
                <a href="#"
                    class="btn text-primary ml-2 border-primary md:border-2 hover:bg-primary hover:text-white">Signup</a>
            </div>

            {{-- <div class="flex items-end justify-center">
                <div class="bg-red-500 h-4 w-6"></div>
                <div class="bg-blue-500 h-8 w-6"></div>
                <div class="bg-green-500 h-12 w-6"></div>
            </div> --}}
            <header>
                <h2 class="text-gray-700 text-6xl font-semibold">Recipes</h2>
                <h2 class="text-2xl font-semibold">For Ninjas</h2>
            </header>

            <div>
                <h4 class="font-bold mt-12  pb-2 border-b border-gray-200">Latest Recipes</h4>
                <div class="mt-8 grid lg:grid-cols-3 md:grid-cols-2 gap-10">
                    {{-- cards go here --}}

                    <div class="card hover:shadow-lg">
                        <img src="images/food.jpg" class="w-full h-32 sm:h-48 object-cover" alt="Stew">
                        <div class="m-4">
                            <span class="font-bold">Fried Beans Chilly Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="badge">

                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card hover:shadow-lg">
                        <img src="images/food.jpg" class="w-full h-32 sm:h-48 object-cover" alt="Stew">
                        <div class="m-4">
                            <span class="font-bold">Fried Beans Chilly Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="badge">

                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card hover:shadow-lg">
                        <img src="images/food.jpg" class="w-full h-32 sm:h-48 object-cover" alt="Stew">
                        <div class="m-4">
                            <span class="font-bold">Fried Beans Chilly Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="badge">

                            <span>25 mins</span>
                        </div>
                    </div>
                </div>

                <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Most popular</h4>
                <div class="mt-8 grid lg:grid-cols-3 md:grid-cols-2 gap-10">

                    {{-- Cards go here --}}
                </div>

                <div class="flex justify-center"> {{-- flexbox --}}
                    <div class="btn bg-secondary-100 text-secondary-200 hover:shadow-inner">Load More...</div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
