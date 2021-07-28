@extends('layouts.template2')

@section('content')

        <div>
            <img src="{{asset('/images/series/elite/fondo.jpeg')}}" alt=""  height="700px" width="100%">
        </div>
        <div class="row container">
            <div class="col-3">
                <img src="{{asset('/images/series/elite/fondoo.jpeg')}}" alt=""  height="210px" width="300px">
            </div>
            <div class="col-3">
                <img src="{{asset('/images/series/elite/fondoo.jpeg')}}" alt=""  height="210px" width="300px">
            </div>
            <div class="col-3">
                <img src="{{asset('/images/series/elite/fondoo.jpeg')}}" alt=""  height="210px" width="300px">
            </div>
            <div class="col-3">
                <img src="{{asset('/images/series/elite/fondoo.jpeg')}}" alt=""  height="210px" width="300px">
            </div>
    
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

    
    
@endsection