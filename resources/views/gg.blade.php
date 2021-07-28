@extends('layouts.template2')

@section('content')
<header class="header">
    <div class="tittle-movie">
        <div class="menu">
            <a href="#" class="col-md-2"><i class="fas fa-bars fa-2x" style="color: black"></i></a>
            <a href="" class="col-md-8 d-flex justify-content-center"><h1 class="font-weight-bold" style="color: rgb(229, 9, 20)">Ucabflix</h1></a>
            <a href="#" class="col-md-2 d-flex justify-content-end"><i class="fas fa-search fa-2x" style="color: black"></i></a>
        </div>

        <div class="detalles">
            <div class="tipo col-md-3 d-flex justify-content-start">
                <h4 class="font-weight-bold mr-1 d-flex justify-content-start align-items-center" style="color: rgb(229, 9, 20)">U</h4>
                <h6 class="font-weight-bold d-flex justify-content-start align-items-center">Originals Series</h6>
            </div>
            <div class="titulo col-md-4 d-flex justify-content-center align-items-center flex-column">
                <h1>Mission Imposible</h1>
                <h4 class="font-italic">Fallout</h4>
            </div>
            <div class="mini-titulo col-md-2 d-flex justify-content-start">
                <h6 class="font-weight-bold">Mission Imposible</h6>
            </div>
            <div class="tags col-md-3 d-flex justify-content-around">
                <h6 class="font-weight-bold">2019</h6>
                <h6 class="font-weight-bold">| 16+</h6>
                <h6 class="font-weight-bold">| 2 H 46 min</h6>
                <h6 class="font-weight-bold">| Accion</h6>
            </div>
            <div class="descripcion col-md-4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident 
                    praesentium natus, inventore illo nam quasi a voluptas in tenetur, 
                    quidem sapiente suscipit unde molestiae, non voluptatem labore quam 
                    dolore magni.
                </p>
            </div>
            <div class="protagonistas col-md-4">
                <h6><span class="font-weight-bold">Protagonistas</span> Tom Cruise, Simon Pegg, Henry Cavill</h6>
            </div>
            <div class="genero col-md-4">
                <h6><span class="font-weight-bold">Genero</span> Accion, Sigilo, Drama, Ficcion</h6>
            </div>
        </div>
    </div>

    <div class="desvanecer">


    </div>

    <div class="seleccion mb-4">
        <div class="sec-temporada">
                <div class="title-box col-md-5 d-flex justify-content-start">
                    <h2 class="d-flex justify-content-center align-items-center mr-3">Episodios   </h2>
                    <h4 class="d-flex justify-content-center align-items-center" style="color: grey">|</h4>
                    <h5 class="d-flex justify-content-center align-items-center ml-3" style="color: grey">   Mision Imposible</h5>
                </div>
                <select class="selec-temp col-md-2 mb-4" name="select" id="sltemporadas">
                    <option style="color: white" value="Temporada1" selected >Temporada 1</option>
                    <option style="color: white" value="Temporada2"  >Temporada 2</option>
                    <option style="color: white" value="value3">Temporada 3</option>
                </select>
                <p class=" col-md-12" style="color: grey">
                    <span style="color: white">Año de estreno: 2018 </span> <br> Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Dignissimos quas doloribus possimus dolore. Quis fugiat eos 
                    iste nobis nostrum, in mollitia saepe ad laudantium aut debitis quae libero 
                    deleniti consectetur?
                </p>
        </div>
    </div>

    <div id="Temporada1" class="data">
        <div class="box-1 col-md-12">
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
        </div>
        <div class="box-1 col-md-12">
            <div class="box-title col-md-3">
                <div class="image-box"></div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
        </div>
        <div class="box-1 col-md-12">
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title col-md-3">
                <div class="image-box">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
        </div>
    </div>

    <div id="Temporada2" class="data">
        <div class="box-2 col-md-12">
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:14</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
        </div>
        <div class="box-2 col-md-12">
            <div class="box-title-2 col-md-3">
                <div class="image-box-2"></div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 39:40</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
        </div>
        <div class="box-2 col-md-12">
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
            <div class="box-title-2 col-md-3">
                <div class="image-box-2">
                    
                </div>
                <div class=" d-flex justify-content-between">
                    <h6 class="d-flex justify-content-start">titulo de prueba 2</h6>
                    <h6 class="d-flex justify-content-end"><span>Dur.</span> 45:12</h6>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                    laudantium sit ad minus ipsam aut.
                </p>
            </div>
        </div>
    </div>

</header>
@endsection