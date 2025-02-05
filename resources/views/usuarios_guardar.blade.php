
@extends('plantilla')

@section('contenido')

@method("post")

@csrf 

<h2>Usuario</h2>


<form action="/UsuariosGuardar" method="post">
@csrf 
Usuario: <input type="email" name="usuario"><br>
Password: <input type="password"  name="password"><br>
Tipo: <select type=" "  name="tipo">
        <option value="1">Empleado</option>
        <option value="2">Usuario</option>
</select><br>
<input type="submit" value="Guadar">
</form>


@endsection