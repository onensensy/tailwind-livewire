<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tailwind</title>
</head>

<body class="text-gray-700">
    <div> {{-- Content Wrapper --}}
        <div>
            <nav>
                <div>
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100"><a href="/index"> Food Ninja</a>
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

        <main class="px-16 py-6">
            <div>
                <a href="#" class="text-primary">Login</a>
                <a href="#" class="text-primary">Signup</a>
            </div>
            <header>
                <h2 class="text-gray-700 text-6xl font-semibold">Recipes</h2>
                <h2 class="text-2xl font-semibold">For Ninjas</h2>
            </header>

            <div>
                <h4 class="font-bold mt-12  pb-2 border-b border-gray-200">Latest Recipes</h4>
                <div>
                    {{-- cards go here --}}
                    <div>
                        <img src="images/food.jpg" alt="">
                        <div>
                            <span>Fried Beans Chilly Stew</span>
                            <span>Recipe by Mario</span>
                        </div>
                    </div>
                </div>

                <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Most popular</h4>
                <div>
                    {{-- Cards go here --}}
                </div>

                <div>
                    <div class="bg-secondary-100 text-secondary-200">Load More...</div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
