@extends('plantilla')

@section('contenido')

    <form action="/validaentrada" method="post">
        @csrf

        Usuario: <input type="email" name="usuario" id=""><br>
        Contraseña: <input type="password" name="password" id=""><br>

        <input type="submit" value="Entrar"> <br>

        @if(isset($msg))
            <span>{{ $msg }}</span>
        
        @endif

    </form>

@endsection