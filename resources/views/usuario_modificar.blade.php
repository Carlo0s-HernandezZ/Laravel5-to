
@extends('plantilla')

@section('contenido')

@method("post")


<h2>Usuario</h2>

<script> //valida que los datos hallan sido ingresado todos.
    function valida_datos(){
        var tipo = document.getElementById("tipo");
        var usu =document.getElementById("usuario").value;
        var pass =document.getElementById("password").value;
        var imag= document.getElementById("img").value
        if(tipo.value == "0"){
            alert("No has ingresado un tipo de Usuario");
            return false;
        }else if(usu == ""){
            alert("EL campo usuario no debe estar vacio");
            return false;
        }else if(pass == ""){
            alert("El campo contraseña no debe estar vacio");
            return false;
        }else if(imag==""){
            alert("El campo de imagen debe tener evidencia.");
            return false;
        }

    }
</script>

<form action="/usuariomodificar/{{$datos->id_user}}" method="post" onsubmit="return valida_datos()" enctype="multipart/form-data">
@csrf 
<img src="{{$datos->imgurl}}" alt="" width="20" height="20%"><br>
Codigo: <input type="number" name="codigo" id="" class="form-control" value="{{$datos->id_user}}" disabled><br>
Usuario: <input type="email" name="usuario" class="form-control"  value="{{$datos->usuario}}" id="usuario"><br>
Password: <input type="password"  name="password" id="password" class="form-control"  value="{{$datos->password}}"><br>
Tipo: <select  type=" "  name="tipo" id="tipo">
    <option value="0" >Selcciones uno</option>
    @if ($datos->tipo=="1")
    <option value="1">Empleado</option>
    <option value="2">Cliente</option>
        @else if($datos->tipo=="2")
    <option value="1">Empleado</option>
    <option value="2">Cliente</option>    
    
@endif
</select><br>
Imagen: <input type="file" name="img" id="imagen" ><br>
<input type="submit" value="Modificar">
</form>
@if (isset($msg))

<span>{{$msg}}</span>

@endif

@endsection