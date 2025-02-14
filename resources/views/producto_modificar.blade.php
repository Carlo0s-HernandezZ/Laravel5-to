@extends('plantilla')

@section('contenido')

@method("post")

<h2>Producto</h2>

<script>
    function validar_dato(){
        var nom =document.getElementById("Nombre").value;
        var cost =document.getElementById("Costo").value;
        var stoc =document.getElementById("Stock").value;
        var descrip =document.getElementById("Descripcion").value;
        if(nom == ""){
            alert("No has ingresado un nombre")
            return false;
        }else if (cost == ""){
            alert("No has ingresado un costo")
            return false;
        }else if(stoc == ""){
            alert("No has ingresado el stock")
            return false;
        }else if(descrip == ""){
            alert("No has ingresado una descricion")
            return false;
        }
    }

</script>

<form action="/productoModificar/{{$datos->id}}" method="post" onsubmit="return validar_dato()">

    @csrf

    Id: <input type="number" name="id" id="id" value="{{$datos->id}}" disabled><br>
    Nombre: <input type="text" name="nombre" id="Nombre" value="{{$datos->nombre}}"><br>
    Costo: <input type="number" name="costo" id="Costo" value="{{$datos->costo}}"><br>
    Stock: <input type="number" name="stock" id="Stock" value="{{$datos->stock}}"><br>
    Descripcion: <input type="text" name="descripcion" id="Descripcion" value="{{$datos->descripcion}}">

    <input type="submit" value="Modificar">

</form>

    @if (isset($msg))

    <span>{{isset($msg)}}</span>
    
    @endif

@endsection