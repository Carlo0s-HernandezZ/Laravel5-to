@extends('plantilla')

@section('contenido')

@method("post")
@csrf
<h2>Producto</h2>

<br>
<form action="/ProductoGuardar" method="post">
    @csrf
    <!-- ID <input type="text"> <br> -->
    Nombre <input type="text"  class="form-control" name="nombre"> <br>
    Costo <input type="number"  class="form-control" name="costo"> <br>
    Stock <input type="number"  class="form-control" name="stock"> <br>
    Descripcion <textarea name="descripcion"  class="form-control" id="" cols="30" rows="5"></textarea> <br><br>

    <input type="submit" value="Guardar" class="btn btn-primary">
    </form>

@endsection