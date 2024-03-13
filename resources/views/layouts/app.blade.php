<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0211243aaf.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- tutto quello che e' codice del layout verra esteso alle pagine rimanendo statico --}}
{{-- header --}}
@include('partials.header')
{{-- main --}}
@yield('content')
{{-- footer --}}
</body>
</html>