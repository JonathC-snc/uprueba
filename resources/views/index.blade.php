@extends('layouts.template')

@section('content')
<div class=" box-up col-md-12 mt-5 d-flex justify-content-center align-items-center flex-column">
    <h1 style="text-align: center;"><strong>Películas y series <br> ilimitadas y mucho más.</strong> </h1>
    <h2>Disfruta donde quieras. Cancela cuando quieras.</h2>
    <h6>¿Quieres ver Netflix ya? Ingresa tu email para crear una cuenta o reiniciar tu membresía de Netflix.</h6>
    <ul>
        <li style="display: inline;"> <input type="email" name="" id="" placeholder="Email" style="height: 50px; width:400px; display:inline-block; "></li>
        <li style="display: inline;"><button type="button" class="btn color-button-ucabflix" style="color: white">
            <a class="nav-link" style="color: white" href="">{{ __('Comenzar') }}</a>
        </button></li>
    </ul>
</div>
@endsection
