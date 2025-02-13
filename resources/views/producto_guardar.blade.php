@extends('plantilla')

@section('contenido')

@method("post")
@csrf
<h2>Producto</h2>

<br>
<form action="/ProductoGuardar" method="post">
    @csrf
    <!-- ID <input type="text"> <br> -->
    Nombre <input type="text" name="nombre"> <br>
    Costo <input type="number" name="costo"> <br>
    Stock <input type="number" name="stock"> <br>
    Descripcion <textarea name="descripcion" id="" cols="30" rows="5"></textarea> <br><br>

    <input type="submit" value="Guardar">
    </form>

@endsection