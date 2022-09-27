{{-- @extends('layouts.app')

@section('title', 'Pagina de inicio')
@section('meta-description', 'Esta es la pagina de inicio de mi sitio web')


{{-- Se utiliza el metodo @section para definir el contenido de la sección, y el metodo @endsection para indicar el final de la sección. 
@section('content')
    <h1>Estas en la pagina de inicio</h1>
@endsection --}}

<x-layouts.app title="Inicio" meta-description="Esta es la pagina de inicio de mi sitio web">
    {{-- x hace referencia a components y layout es el nombre del componente sin necesidad de extencion --}}

    {{-- En el componente se define la variable como metaDescription y en la vista se define como meta-description, esto es debido a que blade no permite definir variables con guiones, por lo que se utiliza el metodo camelCase para definir la variable en el componente y snake_case para definir la variable en la vista. --}}

    <h1>Estas en la pagina de inicio</h1>

</x-layouts.app>
