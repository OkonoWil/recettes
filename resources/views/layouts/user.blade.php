<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('/storage/icon/icons8_sausage_barbeque.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('FontAwesone/css/all.css')}}">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" box-border text-gray-500">
        <div class="flex flex-col box-border px-14 w-screen ">

            {{-- --}}
            @section('sidebar')
                @include('partials.header')
            @show

            {{-- --}}
            @yield('content')
            
        </div>
        <footer class="px-5 flex justify-between h-20 text-white text-xl items-center bg-gradient-to-r from-orange-400 via-yellow-500 to-orange-400">
            <div>
                <p>&copy; Copyright {{date('Y')}}. Okono Wilfried, développeur full stack</p>
            </div>
            <div>
                <a class="m-2" href="https://www.linkedin.com/in/wilfried-lo%C3%AFc-okono-mehitang-11a380218/)"><i class="fa-brands fa-linkedin"></i></a>
                <a class="m-2" href="https://twitter.com/OkonoWilfried"><i class="fa-brands fa-twitter"></i></a>
                <a class="m-2" href="https://github.com/OkonoWil"><i class="fa-brands fa-github"></i></a>
            </div>
        </footer>
        <script src=""></script>
    </div>
</body>
</html>