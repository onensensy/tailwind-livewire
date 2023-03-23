<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="text-3xl text-purple-600 font-bold underline text-center m-2">
        Welcome to TailwindCSS
    </h1>

    <p class="text-red-200 text-left">This is sensy</p>

    <div>
        <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
            <div class="shrink-0">
                <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
            </div>
            <div>
                <div class="text-xl font-medium text-black">ChitChat</div>
                <p class="text-slate-500">You have a new message!</p>
            </div>
        </div>
    </div>
</body>

</html>
