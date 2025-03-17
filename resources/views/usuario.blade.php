
@extends('plantilla')

@section('contenido')




    <h2>Usuario</h2>
    <br>

    Usuario <input type="text"><input type="submit" value="Buscar"><br>
    <button  class="btn btn-primary"><a href="{{route('usuformGuardar')}}">Nuevo Registro</a></button>
    


    <br><br><br>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Password</th>
            <th scope="col">Tipo</th>
            <th scope="col">Imagen</th>
            <th scope="col" colspan="2">Accion</th>
        </tr>
    </thead>
        @foreach ($datos as $dat)
        <tr> 
            <td>{{$dat->id_user}}</td>
            <td>{{$dat->usuario}}</td>
            <td>{{$dat->password}}</td>
           <td>  @if ($dat->tipo==1)
             Empleado
             @elseif($dat->tipo==2)
             Cliente
            @endif
            </td>
            <td> <img src="{{$dat->imgurl}}" alt="" width="15%" height="15%">  </td>
            <!-- <td>{{$dat->tipo}}</td> -->
            <td> <button> <a href="/usuarioformModificar/{{$dat->id_user}}"
                class="btn btn-primary" onclick="return confirm('Diabloooooooooo loco, ¿Estás seguro de modificar esto?')" 
       class="btn btn-danger" style="text-decoration: none;">
        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
            Modificar</a></button></td>
            <td>
   <button> <a href="/usuario_Eliminar/{{$dat->id_user}}" 
       onclick="return confirm('Diabloooooooooo loco, ¿Estás seguro de eliminar esto?')" 
       class="btn btn-danger" style="text-decoration: none;">
        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
        Eliminar
    </a></button>
</td>        </tr>
        @endforeach
        
        </table>
    <br><br><br>

@endsection