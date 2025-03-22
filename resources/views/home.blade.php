<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        <!--<h1>Bienvenido a la página principal</h1>-->
        <x-alert type="danger" class="mb-4"> <!-- paso de información por los atributos de la alerta-->
            <!--llamando al componente alert views.components.alert.blade.php -->
            <x-slot name="title">
                <!-- en la variable title se mete el contenido mas abajo que va al componente alert -->
                Titulo de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <p>Hola mundo</p>
    </div>

</body>

</html>
