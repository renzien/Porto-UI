<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alif Rizki Portofolio | @yield('title')</title>
    @vite('resources/css/app.css')

    {{-- Remix Icons --}}
    <link href="https://cdn.remixicon.com/releases/v2.1.0/remixicon.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    <div>
        @yield('content')
    </div>
</body>
</html>