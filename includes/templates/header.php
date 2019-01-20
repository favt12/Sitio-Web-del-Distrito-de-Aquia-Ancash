<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link href="css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fullcalendar.min.css">
  <!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>-->
</head>

<body data-spy="scroll" data-target="#menu">
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header id="inicio">
  <nav id="menu" class="barra navbar navbar-expand-lg navbar-light fixed-top">
    <img src="img/logo.png" width="180px" height="50px" alt="">
    <button class="btn-bar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="menu-letter collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="act-ray navbar-nav nav-pills">
        <li class="nav-item">
          <a data-scroll class="nav-link active" href="#inicio" aria-pressed="true">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a data-scroll class="nav-link" href="#discover" aria-pressed="true">Descubre</a>
        </li>
        <li class="nav-item">
          <a data-scroll class="nav-link" href="#datos" aria-pressed="true">Datos Utiles</a>
        </li>
        <li class="nav-item">
          <a data-scroll class="nav-link" href="#ubicacion" aria-pressed="true">Ubicacion</a>
        </li>
      </ul>
    </div>
  </nav>


<!-- Slides -->
  <div id="slides">
    <ul class="slides-container">
      <li>
        <img src="img/aquia_panorama.png">
        <div class="carousel-caption">
          <h2>AQUIA - PARAISO ESCONDIDO</h2>
          <h4>Ancash, Bolognesi, Aquia</h4>
        </div>
      </li>
      <li>
        <img src="img/señor_cayac.jpg">
        <div class="carousel-caption">
          <h2>SANTUARIO DEL SEÑOR DE CAYAC</h2>
          <h4>3 DE MAYO</h4>
        </div>
      </li>
      <li><img src="img/aquiariooscuro.png"></li>
      <li><img src="img/aquia_foto_sanmiquel.jpg"></li>
      <li><img src="img/iglesiapanorama.jpg"></li>
    </ul>
    <nav class="slides-navigation">
      <a href="#" class="next"><span class="icon-right-open"></span></a>
      <a href="#" class="prev"><span class="icon-left-open"></span></a>
    </nav>
  </div><!-- #slides -->
</header>
