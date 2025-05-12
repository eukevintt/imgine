<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-background-primary min-h-screen flex flex-col">

    @if (request()->routeIs('images.search') || request()->routeIs('images.show'))
        <x-navbar-images />
        <div class="pt-32 flex-grow">
            {{ $slot }}
        </div>
    @else
        <x-navbar />

        {{ $slot }}
    @endif

    <x-layouts.footer />


    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
