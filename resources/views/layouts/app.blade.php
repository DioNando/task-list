<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Application')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>

<body>
    <main class="container mx-auto max-w-lg p-4">
        <p class="text-3xl text-bold pb-4">@yield('title')</p>
        <div>
            @yield('content')
        </div>
    </main>

</body>

</html>
