@extends('layouts.app')

@section('content')
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/about.css">
  <script src="java/galeria.js"></script>
  <title>NeoNica360  </title>
</head>

<body>
  <div class="about-section">
    <h1>Acerca de Nosotros</h1><br>
    <p>Neonica360 es una plataforma dónde los dispositivos con acceso a internet podrán ingresar con lo cual los usuarios que estén o no registrados puedan ubicar lugares en base a sus preferencias y teniendo una mayor inmersión en su búsqueda y elección gracias a la tecnología 360 tanto en videos como en fotos apoyándonos de guías turísticos los cuales aportarán de sus conocimientos para mostrar los alrededores</p><br>
    <p>Nosotros estamos virgidos a dos públicos los cuáles son los usuarios de la página y las compañías o lugares que presten nuestros servicios.</p>
  </div>
  <div class="equipo">
  <h2 >Equipo Dev Warrior</h2>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img src="img/samuel.png" alt="Jane" style="width:100%">
        <div class="container">
          <h2>Samuel Perez</h2>
          <p class="title">Desarrollador</p>
          
          <p>isaacsalgado105@gmail.com</p>
          <p><button class="button">Contacta</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="img/Gerald.png" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Gerald Paredes</h2>
          <p class="title">Desarrollador</p>
          
          <p>villanuevagerald567@gmail.com</p>
          <p><button class="button">Contacta</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="img/schiffman.png" alt="John" style="width:100%">
        <div class="container">
          <h2>Abraham Schiffman</h2>
          <p class="title">Desarrollador</p>
          
          <p>josephschiffmann2002@gmail.com</p>
          <p><button class="button">Contacta</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="img/Kenny.png" alt="John" style="width:100%">
        <div class="container">
          <h2>Keny Lopez</h2>
          <p class="title">Comunicador</p>
          
          <p>kennylopez24012003@gmail.com</p>
          <p><button class="button">Contacta</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="img/Emmanuel.png" alt="John" style="width:100%">
        <div class="container">
          <h2>Enmanuel Quintero</h2>
          <p class="title">Diseñador</p>
          
          <p>qenmanuel2@gmail.com</p>
          <p><button class="button">Contacta</button></p>
        </div>
      </div>
    </div>

  </div>
  
</body> 
@endsection