<x-layouts.app title="Blog - Crear nuevo post"
    meta-description="Esta es la pagina de crear nuevo posts de mi sitio web">


    <form action="{{ route('posts.store') }}" method="POST">

        @csrf {{--  Se debe poner siempre esto para que funcione el formulario en tipo POST --}}

        <div>
            <label for="title">Titulo del post</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">

            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror

        </div>
        <div>
            <label for="body">Contenido</label> <br>
            <textarea name="body" id="body" value="{{ old('body') }}"></textarea>

            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror

        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
