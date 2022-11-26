@extends('layouts.app')

@section('content')
  <!--banner-->
  <div class="banner">
    <div class="mid-contant text-center">
      <div class="banner-contant">
        <h3>Neonica360 es una plataforma dónde los dispositivos con acceso a internet podrán ingresar con lo cual los usuarios que estén o no registrados puedan ubicar lugares en base a sus preferencias y teniendo una mayor inmersión en su búsqueda y elección gracias a la tecnología 360 tanto en videos como en fotos apoyándonos de guías turísticos los cuales aportarán de sus conocimientos para mostrar los alrededores</h3>
        <h2>Descubre Nuestro maravilloso Pais</h2>
        <a class="defoult-btn" href=""> <i class="" aria-hidden="true"></i>Descubre</a>
        <a class="defoult-btn" href=""> <i class="" aria-hidden="true"></i>Populares</a>
      </div>
    </div>
  </div>
  <!--banner bottom-->

  <div class="cont">
 <div class="slider"></div>
 <ul class="nav"></div>
 <div data-target='right' class="side-nav side-nav--right"></div>
 <div data-target='left' class="side-nav side-nav--left"></div>
   </div>


   
</body>
<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
        <img src="photo_2022-11-25_16-54-19.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
        <img src="photo_2022-11-25_16-54-19.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
        <img src="photo_2022-11-25_16-54-19.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
        <img src="photo_2022-11-25_16-54-19.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
        <img src="photo_2022-11-25_16-54-19.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
        <img src="photo_2022-11-25_16-54-19.jpg" style="width:100%">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
    <!-- Image text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  
    <!-- Thumbnail images -->
    <div class="row">
      <div class="column">
        <img class="demo cursor" src="img/2.jpeg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
      </div>
      <div class="column">
        <img class="demo cursor" src="img/3.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
      </div>
      <div class="column">
        <img class="demo cursor" src="img/4.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
      </div>
      <div class="column">
        <img class="demo cursor" src="img/5.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
      </div>
      <div class="column">
        <img class="demo cursor" src="img/6.jpeg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
      </div>
      <div class="column">
        <img class="demo cursor" src="img/8.jpeg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
    </div>
  </div>
@endsection
