<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add foods</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-gray-100">

    <div class="p-4 bg-white">
        <div>
            @livewire('counter')
        </div>
    </div>
    @livewireScripts
</body>

</html>
