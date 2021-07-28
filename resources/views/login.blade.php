@extends('layouts.template')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-4'>
        </div>
        <div class='col-4' style='background-color:rgba(0, 0, 0, 0.8); height:600px;'>
            <div class="card-body mt-5"">
                <h2 style="font-family: verdana;">Inicio sesión</h2><br>
                <form method="POST" action="{{route('iniciar.sesion')}}">
                    @csrf

                    <div class="form-group">
                        <div class="col-auto">
                            <input id="correo" type="correo" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="correo" autofocus placeholder="Correo">

                            @error('correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col-auto">
                            <input id="contrasena" type="password" class="form-control @error('contrasena') is-invalid @enderror" name="contrasena" required autocomplete="current-password" placeholder="Contraseña">

                            @error('contrasena')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br>

                    <button type="submit" style="color: white" class='btn color-button-ucabflix form-control'>
                        {{ __('Iniciar Sesión') }}
                    </button><br><br>

                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recuerdame') }}
                    </label><br><br>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" style="color:white" href="{{ route('password.request') }}">
                            {{ __('Olvidó su contraseña?') }}
                        </a>
                    @endif
                    <label class="form-check-label" for="remember">
                        {{ __('¿Primera vez en Netflix?  ') }}<a href="{{route('create.usuario')}}">Suscríbete ya.</a> 
                    </label>
                    
                        
                </form>
            </div>
        </div>
        <div class='col-4'>
        </div>
        
    </div>
</div>

</div>
@endsection

