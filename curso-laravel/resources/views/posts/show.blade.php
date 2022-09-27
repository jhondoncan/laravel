<x-layouts.app title="Blog - {{ $post->title }}"
    meta-description="Esta es la pagina de blog {{ $post->title }} de mi sitio web">

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
