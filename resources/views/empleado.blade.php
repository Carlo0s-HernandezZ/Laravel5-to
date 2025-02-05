


@extends('plantilla')

@section('contenido')




    <h2>Empleados</h2>
    <br>
    <form action="/" method="get">
    Nombre <input type="text"><br>
    Edad <input type="number"><br>
    Hora <input type="time"><br>
    Fecha <input type="date"><br>
    Puesto <input type="text"><br>
    Sueldo <input type="number"><br>
    Email <input type="email"><br>
    Caja <input type="hidden"><br>
    <input type="submit" value="Enviar">
    </form>

    <br><br><br>
    <table style="border-color: black; background-color: aquamarine; ">
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

 