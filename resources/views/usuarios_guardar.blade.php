
@extends('plantilla')

@section('contenido')

@method("post")

@csrf 

<h2>Usuario</h2>


<form action="/UsuariosGuardar" method="post" enctype="multipart/form-data">
@csrf 
Usuario: <input type="usuario" name="usuario"><br>
Password: <input type="password"  name="password"><br>
Tipo: <select type=" "  name="tipo">
        <option value="1">Empleado</option>
        <option value="2">Cliente</option>
</select><br>
Imagen: <input type="file" name="img" id="">
<input type="submit" value="Guadar">
</form>


@endsection