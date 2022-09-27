{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Esta es la pagina de blog de mi sitio web')


@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="Esta es la pagina de blog de mi sitio web">



    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Crear nuevo post</a>

    @foreach ($posts as $post)
        {{-- <h2>{{ $post->title }}</h2> --}}
        <h2> <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
    @endforeach

</x-layouts.app>
