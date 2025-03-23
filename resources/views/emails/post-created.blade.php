<x-mail::message>
    <h1>Correo por aprobar</h1>
    <p>Se ha creado un nuevo post que necesita ser aprobado.</p>
    <a href="{{ route('posts.show', $post) }}">Click aqui para aprobar</a>
</x-mail::message>
