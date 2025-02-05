
@extends('plantilla')

@section('contenido')

@method("post")

@csrf 

<h2>Usuario</h2>


<form action="/usuformModificar/{{$datos->usuario}}" method="post">
@csrf 
Codigo: <input type="number" name="codigo" id="" value="{{$datos->id_usuario}}"><br>
Usuario: <input type="email" name="usuario" value="{{$datos->usuario}}"><br>
Password: <input type="password"  name="password" value="{{$datos->password}}"><br>
Tipo: <select type=" "  name="tipo">
    @if ($datos->tipo=="1")
    <option value="1">Empleado</option>
    <option value="2">Usuario</option>
@else if($datos->tipo=="2")
    <option value="1">Empleado</option>
    <option value="2">Usuario</option>    
    
@endif
</select><br>
<input type="submit" value="Modificar">
</form>


@endsection