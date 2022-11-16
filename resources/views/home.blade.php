<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoNica360</title>
    <LINK REL=StyleSheet HREF="tema.css" TYPE="text/css" MEDIA=screen>

    <!--Llamada a los archivos css-->
    @vite('resources/css/navbar.css')
    @vite('resources/css/login.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/index.css')
    @vite('resources/css/mapa.css')
    @vite('resources/css/contacto.css')
    @vite('resources/css/about.css')
    @vite('resources/css/galeria.css')

    <!--Llamada a los archivos js-->
    @vite('resources/js/login.js')
    @vite('resources/js/index.js')
    @vite('resources/js/mapa.js')
    @vite('resources/js/about.js')
    @vite('resources/js/navbar.js')

</head>

<body>
    <header>
      <a href="/home"  class="logo">
        <img src="img/logo.png" alt="logo de la empresa">
    </a>
    <nav>
      <a href="/home">Inicio</a>
      <a href="/galeria">Galeria</a>
      <a href="/mapa">Mapa</a>
      <a href="/nosotros">Nosotros</a>
      <a href="/auth">Log In</a>
    </nav>
    </header>

    <main>
        @yield('cuerpo')
    </main>

    <footer>

    </footer>
</body>


</html>

