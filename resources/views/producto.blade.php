@extends('plantilla')

@section('contenido')

    <h2>Producto</h2>

<!-- Interpolacion
 visualiza la informacion de la variable dentro del HTML -->

 {{$usuario}}

<br><br><br>

    ID <input type="text"> <br>
    Nombre <input type="text"> <br>
    Costo <input type="number"> <br>
    Stock <input type="number"> <br>
    Descripcion <textarea name="" id="" cols="30" rows="5"></textarea> <br>

@endsection