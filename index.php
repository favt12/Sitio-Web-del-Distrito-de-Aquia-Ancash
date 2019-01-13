<?php require_once 'includes/templates/header.php' ?>
<?php require_once 'includes/templates/container_one.php' ?>
<?php require_once 'includes/templates/descubre.php' ?>
<?php require_once 'includes/templates/datos.php' ?>
<?php require_once 'includes/templates/ubicacion.php' ?>
<?php require_once 'includes/templates/footer.php' ?>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/barra-scroll.js"></script>
  <script src="js/jquery.superslides.js"></script>
  <script src="js/lightbox.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/fullcalendar.min.js"></script>
  <script src="js/calendar.js"></script>
  <script src="js/locale/es.js"></script>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
  <!--<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
  <script src="js/map.js"></script>-->

  <script src="js/smooth-scroll.polyfills.min.js"></script>
  <script>
  //-----------------SmoothScroll-------------------

  var scroll = new SmoothScroll('a[href="#inicio"]');
  var scroll = new SmoothScroll('a[href="#discover"]');
  var scroll = new SmoothScroll('a[href="#datos"]');
  var scroll = new SmoothScroll('a[href="#ubicacion"]');
  </script>
  <script src="js/main.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
