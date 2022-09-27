<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Curso Laravel - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
</head>

<body>

    <x-layouts.navigation /> {{-- Se llama el componente navigation --}}



    {{-- Contenido variable de cada vista --}}

    {{ $slot }}

</body>

</html>
