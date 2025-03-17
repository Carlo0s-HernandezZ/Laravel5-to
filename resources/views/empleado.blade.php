@extends('plantilla')

@section('contenido')




    <h2>Empleados</h2>
    <br>
    <form class="form-inline" action="/" method="get">
    Nombre <input type="text" class="form-control-plaintext"><br>
    Edad <input type="number" class="form-control-plaintext"><br>
    Hora <input type="time" class="form-control-plaintext"><br>
    Fecha <input type="date" class="form-control-plaintext"><br>
    Puesto <input type="text" class="form-control-plaintext"><br>
    Sueldo <input type="number" class="form-control-plaintext"><br>
    Email <input type="email" class="form-control-plaintext"><br>
    Caja <input type="hidden" class="form-control-plaintext"><br>
    <input type="submit" value="Enviar"  class="btn btn-primary mb-2">
    </form>

    <br><br><br>
    <table class="table">
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>PUESTO</th>
            <th>SUELDO</th>
        </tr>
        
        @foreach ($datos as $dat)
        <tr> 
            <td>{{$dat['codigo']}}</td>
            <td>{{$dat['nombre']}}</td>
            <td>{{$dat['apellido']}}</td>
            <td>{{$dat['puesto']}}</td>
            <td>{{$dat['sueldo']}}</td>
        </tr>
        @endforeach
        
        </table>
    <br><br><br>

    @endsection

 