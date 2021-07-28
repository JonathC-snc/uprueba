@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($usuario->perfiles as $perfil)
                <div class="col-3">
                    <div class="container text-center">
                        <div class="row bg-white" style="height: 100px; width:100px">
                            
                        </div>
                        <div class="row">
                            <a href="{{route('inicio',compact('perfil'))}}">{{$perfil->nombre_perfil}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection