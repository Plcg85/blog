<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 \ Mostrar un post</title>
</head>

<body>

    <a href="/posts">Volver a la lista de posts</a>

    <h1>Título: {{ $post->title }} </h1>
    <p>
        <b>Categoría: {{ $post->category }}</b>
    </p>
    <p>
        <b>Contenido: {{ $post->content }}</b>
    </p>

    <a href="/posts/{{ $post->id }}/edit">
        Editar post
    </a>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Eliminar post</button>

    </form>

</body>

</html>
