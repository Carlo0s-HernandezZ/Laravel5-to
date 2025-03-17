@extends('plantilla')


@section('contenido')



<main class="form-signin">
<form action="{{ route('auth.authenticate') }}" method="POST">
    @csrf
    <img class="mb-4" src="{{ asset('img/bootstrap-logo.svg') }}" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
      <label for="email">Correo Electronico</label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
<!--     <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="your name">
      <label for="name">Your Name</label>
      @error('name')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> -->
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
      <label for="password">Contraseña</label>
      @error('password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordar
      </label>
    </div>
    <div style="padding-bottom: 3%;">
        <button type="button" class="btn btn-primary"><a href="{{ route('auth.register') }}">Registrarse</a></button>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2025–2025</p>
  </form>
</main>


@endsection
