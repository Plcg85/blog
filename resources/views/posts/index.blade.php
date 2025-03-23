<x-app-layout>

    <h1>Aqui se mostraran todos los posts</h1>

    <a href="/posts/create">
        Crear un nuevo post
    </a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{-- Paginacion --}}
    {{ $posts->links() }}

</x-app-layout>
