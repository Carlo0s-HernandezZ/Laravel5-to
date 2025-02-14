@extends('plantilla')

@section('contenido')

    <h2>Producto</h2>

<!-- Interpolacion
 visualiza la informacion de la variable dentro del HTML -->


 Producto    <input type="text"><input type="submit" value="Buscar">
 <a href="{{route('usuformGuardarP')}}"><button>Nuevo Registro</button></a>



<br>

<table border="4">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Costo</th>
        <th>Stock</th>
        <th>Descripcion</th>
        <th colspan="2">Accion</th>
    </tr>

    @foreach ($datos as $dat)
        <tr>
            <td>{{$dat->id}}</td>
            <td>{{$dat->nombre}}</td>
            <td>{{$dat->costo}}</td>
            <td>{{$dat->stock}}</td>
            <td>{{$dat->descripcion}}</td>
            <td><button><a href="/productoformModifcar/{{$dat->id}}"
            onclick="return confirm('Se hara modificaciones a un registro \n¿Confirma la accion?')"
            class="btn btn-danger" style="text-decoration: none;"
            > <span class="glyphicon-remove-circle" aria-hidden="true">Modificar</span></a></button></td><br>
            <td><button><a href="/producto_Eliminar/{{$dat->id}}"
            onclick="return confirm('Se eliminara un registro,\n¿Confirma la accion?')"
            class="btn btn-danger" style="text-decoration: none;"
            > <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>Eliminar</a></button></td><br>            
        </tr>
    
    @endforeach

</table>



@endsection