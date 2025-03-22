<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Pedro Luis')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- fontawesome --}}
    {{-- tipografía --}}
    @stack('css')
</head>

<body>

    <header></header>

    @yield('content')

    <footer></footer>

    @stack('js')

</body>

</html>
