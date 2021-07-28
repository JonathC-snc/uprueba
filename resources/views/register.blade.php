@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
               <h1>¡Hola de nuevo!</h1>
               <h2>Suscribirte a Netflix es fácil.</h2>
               <h3>Ingresa tus datos</h3>

                <div class="card-body mt-5" style='background-color:rgba(0, 0, 0, 0.8); height:650px;'>
                    <form method="POST" action="{{route('usuario.store')}}">

                        @csrf
                        <div class="form-group row justify-content-center">
                            <label for="nombre"class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-8">
                                <input id="nombre" type="text" class="form-control" @error('nombre') is-invalid @enderror name="nombre" value="{{ old('nombre') }}" required"> 
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>
                            <div class="col-md-8 ">
                                <input id="apellido" type="text" class="form-control" @error('apellido') is-invalid @enderror name="apellido" value="{{ old('apellido') }}" required"> 
                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        
                        <div class="form-group row">
                            <label for="fecha_nac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>
                            <div class="col-md-8">
                                <input id="fecha_nac" type="date" class="form-control" @error('fecha_nac') is-invalid @enderror name="fecha_nac" value="{{ old('fecha_nac') }}" required"> 
                                @error('fecha_nac')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="nombre"class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
                            <div class="col-md-8">
                                <select name="sexo" id="sexo" class="form-select" @error('sexo') is-invalid @enderror value="{{ old('sexo') }}" required>
                                    <option value=""></option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                    <option value="N/A">N/A</option>
                                </select>
                                
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="nombre_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

                            <div class="col-md-8">
                                <input id="nombre_usuario" type="text" class="form-control @error('nombre_usuario') is-invalid @enderror" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autocomplete="nombre_usuario" autofocus>

                                @error('nombre_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-8">
                                <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="email">

                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="contrasena" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-8">
                                <input id="contrasena" type="password" class="form-control @error('contrasena') is-invalid @enderror" name="contrasena" required autocomplete="new-password">

                                @error('contrasena')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="pais"class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>
                            <div class="col-md-8">
                                <select name="pais" id="pais" class="form-select" @error('pais') is-invalid @enderror value="{{ old('pais') }}" required>
                                    <option value="">SELECCIONE</option>
                                    @foreach ($paises as $pais)
                                        <option value="{{$pais->id_pais}}">{{$pais->nombre}}</option>
                                    @endforeach
                                </select>
                                
                                @error('pais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        
                        <div class="form-group row">
                            <label for="ciudad"class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>
                            <div class="col-md-8">
                                <select name="ciudad" id="pais" class="form-select" @error('ciudad') is-invalid @enderror value="{{ old('ciudad') }}" required>
                                   <option value="">SELECCIONE</option>
                                </select>
                                
                                @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                       
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="col-md-8 btn color-button-ucabflix" style="color: white">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/scripts.js')}}"></script>
@endsection