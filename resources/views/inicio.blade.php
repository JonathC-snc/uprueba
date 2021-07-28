@extends('layouts.template2')

@section('content')
<h1></h1>
<div class="featured">
<video class="video-principal" muted height="500" src="{{asset('images/matrix.mp4')}}"></video>
<div class="featured-details">
  <ul class="tags">
    <li class="tag">
      Surrealista
    </li>
    <li class="tag">
      Distópico
    </li>
    <li class="tag">
      Hábil
    </li>
    <li class="tag">
      Siniestro
    </li>
    <li class="tag">
      Emocionante
    </li>
  </ul>
  <div class="featured-actions">

    <button class="button-secondary icon-plus">Mi lista</button>
    <button class="button icon-play">Reproducir</button>
    <button class="button-secondary icon-info">Info</button>

  </div>
</div>
</div>


<main>
<div class="list">
  <h2 class="list-title">Populares en Ucabflix</h2>
  <div class="list-content">
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/matrix.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/bob.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/spider-man.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/dragon.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/john.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/santa.png" alt="Bob Esponja la película">
      </a>
    </div>
  </div>
</div>
<div class="list">
  <h2 class="list-title">Series japonesas anime</h2>
  <div class="list-content">
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/bob.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/matrix.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/spider-man.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/dragon.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/john.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/santa.png" alt="Bob Esponja la película">
      </a>
    </div>
  </div>
</div>
<div class="list">
  <h2 class="list-title">Series de EE.UU. sobre crimenes</h2>
  <div class="list-content">
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/john.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/matrix.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/bob.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/spider-man.png" alt="Bob Esponja la película">
      </a>
    </div>
    <div class="list-item">
      <a href="#">
        <img src="./images/covers/dragon.png" alt="Bob Esponja la película">
      </a>
    </div>

    <div class="list-item">
      <a href="#">
        <img src="./images/covers/santa.png" alt="Bob Esponja la película">
      </a>
    </div>
  </div>
</div>
</main>

<footer class="footer">
<ul class="tab-list">
  <li class="tab-item">
    <a href="#">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M12 2.09961L1 12H4V21H11V15H13V21H20V12H23L12 2.09961ZM12 4.79102L18 10.1914V11V19H15V13H9V19H6V10.1914L12 4.79102Z" />
      </svg>
      <span>Inicio</span>
    </a>
  </li>
  <li class="tab-item">
    <a href="#">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
          <path
            d="M4 3C2.897 3 2 3.897 2 5V19C2 20.103 2.897 21 4 21H12V19H4V5H20V13.2852L22 14.4082V5C22 3.897 21.103 3 20 3H4ZM6.00195 7V9H8V7H6.00195ZM16 7V9H18V7H16ZM6 11V13H8V11H6ZM15.0859 13C14.514 13.019 14 13.492 14 14.1445V22.8555C14 23.7255 14.9132 24.2764 15.6602 23.8574L23.4199 19.502C24.1939 19.067 24.1939 17.932 23.4199 17.498L15.6602 13.1426C15.4734 13.0378 15.2766 12.9937 15.0859 13ZM6 15V17H8V15H6Z"
            fill="black" />
        </g>
        <defs>
          <clipPath id="clip0">
            <rect width="24" height="24" fill="white" />
          </clipPath>
        </defs>
      </svg>
      <span>Próximamente</span>
    </a>
  </li>
  <li class="tab-item">
    <a href="#">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M9 2C5.14585 2 2 5.14585 2 9C2 12.8541 5.14585 16 9 16C10.748 16 12.345 15.348 13.5742 14.2812L14 14.707V16L20 22L22 20L16 14H14.707L14.2812 13.5742C15.348 12.345 16 10.748 16 9C16 5.14585 12.8541 2 9 2ZM9 4C11.7733 4 14 6.22673 14 9C14 11.7733 11.7733 14 9 14C6.22673 14 4 11.7733 4 9C4 6.22673 6.22673 4 9 4Z"
          fill="black" />
      </svg>
      <span>Buscar</span>
    </a>
  </li>
  <li class="tab-item">
    <a href="#">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 2C10.448 2 10 2.448 10 3V11H6L12 17L18 11H14V3C14 2.448 13.552 2 13 2H11ZM2 20V22H22V20H2Z"
          fill="black" />
      </svg>
      <span>Descargas</span>
    </a>
  </li>
</ul>
</footer>
@endsection
