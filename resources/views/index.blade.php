<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tailwind</title>
</head>

<body class="text-gray-700 ">
    <div> {{-- Content Wrapper --}}
        <div>
            <nav>
                <div>
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                        {{-- <a href="/index" class="text-green-500 sm:text-red-500 lg:text-blue-500 "> Food Ninja</a> --}}
                        {{-- <a href="/index" class="text-sm mb:text-xl"> Food Ninja</a> --}}
                        <a href="/index" class=""> Food Ninja</a>
                    </h1>
                </div>

                <ul>
                    <li class="font-bold">
                        <a class="" href="#">
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>ABOUT</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>CONTACT</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>{{-- End nav --}}

        <main class="px-16 py-6 bg-gray-100">
            <div class="flex justify-center md:justify-end">
                <a href="#" class="text-primary">Login</a>
                <a href="#" class="text-primary ml-2">Signup</a>
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
                <div>
                    {{-- cards go here --}}
                    <div class="card">
                        <img src="images/food.jpg" class="w-full h-32 sm:h-48 object-cover" alt="Stew">
                        <div class="m-4">
                            <span class="font-bold">Fried Beans Chilly Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="badge">

                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/food.jpg" class="w-full h-32 sm:h-48 object-cover" alt="Stew">
                        <div class="m-4">
                            <span class="font-bold">Fried Beans Chilly Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="badge">

                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/food.jpg" class="w-full h-32 sm:h-48 object-cover" alt="Stew">
                        <div class="m-4">
                            <span class="font-bold">Fried Beans Chilly Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="badge">

                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card">
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
                <div>
                    {{-- Cards go here --}}
                </div>

                <div class="flex justify-center"> {{-- flexbox --}}
                    <div class="bg-secondary-100 text-secondary-200">Load More...</div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
