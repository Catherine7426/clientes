<x-layouts.app
    :title="$client->name" 
>

<h1>Editando Cliente {{$client->name}}</h1>

<form method="POST" action="{{route ('clientes.update',$client)}}">
    @csrf 
    @method('PATCH')

@include('clientes.form')

<button class="btn btn-primary" type="submit">Enviar</button>

</form><br>
<a class="btn btn-secundary" href="{{route('clientes.index')}}">REGRESAR</a>

</x-layouts.app>