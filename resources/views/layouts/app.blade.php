<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('FontAwesone/css/all.css')}}">
    <title>{{config('app.name')}} | @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <div>
            @section('sidebar')

            @show

            @yield('content')
        </div>
        <footer>
            <div>
                <p>&copy; Copyright {{date('Y')}}. Okono Wilfried, développeur full stack</p>
            </div>
            <div>
                <a href="https://www.linkedin.com/in/wilfried-lo%C3%AFc-okono-mehitang-11a380218/)"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://twitter.com/OkonoWilfried"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://github.com/OkonoWil"><i class="fa-brands fa-github"></i></a>
            </div>
        </footer>
    </div>
</body>
</html>