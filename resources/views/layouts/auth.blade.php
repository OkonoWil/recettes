<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('icons8_online_store.ico')}}" type="image/x-icon">
    <title>{{env('APP_NAME')}} - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen w-screen text-base flex justify-center">
    <div class="container flex flex-col items-center w-2/3 h-full text-gray-500">
        <a href="{{route('home')}}" class="flex flex-row justify-center text-3xl my-5">
            <img src="./icon/tcho_et_yamo.png" alt="Tcop et Yamo">
            <span class="font-extrabold text-orange-400 ml-2">Tchop<span class="text-gray-300">Et</span>Yamo</span>
        </a>
        @yield('content')
    </div>
</body>
</html>