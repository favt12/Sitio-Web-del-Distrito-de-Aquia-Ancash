<div class="form-backg">
  <div class="container-fluid">
    <div class="row text-center justify-content-center">
      <div class="col-8">
        <h6 class="h1 mt-5">CONTACTO</h6>
        <form method="POST" action="https://formspree.io/alexis_22_95@hotmail.com" class="formulario mt-5">
            <div class="form-group row">
              <div class="col-12 col-md-6">
                <input type="text" placeholder="Nombres" name="name" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
            </div><!-- col-12 col-md-6 -->
            
            <div class="col-12 col-md-6">
                <input type="text" placeholder="Apellidos" name="name" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
            </div><!-- col-12 col-md-6 -->

            <div class="col-12 col-md-6">
                  <input type="email" placeholder="Email@" name="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
            </div><!-- col-12 col-md-6 -->

            </div><!-- form-group row -->
            <textarea name="comments" id="" placeholder="Mensaje..." required></textarea>
            <div class="form-group d-flex justify-content-center">
              <input class="btn btn-success btn-lg"  type="submit" value="Enviar">
            </div><!-- .form-group .d-flex .justify-content-center -->
          </form>
        </div><!-- .col-8 -->
    </div><!-- .row .text-center .justify-content-center -->
   </div><!-- .container --> 
</div>

<footer>
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-4 mt-5">
        <h4 class="color-footer"><small>Company</small> | Telvas<img src="img/logo_telvas.png" alt="" width="60px"></h4>
      </div><!-- .col-4 mt-5-->

      <div class="col-4 mt-5">
        <h6 class="color-footer">COPYRIGHT © <small class="Footer-year"></small></h6>
        <h6 class="color-footer"><small>Designed & Developed by Telvas</small></h6>
      </div><!-- .col-4 .mt-5 -->

      <div class="sociales col-4 mt-5">
        <!-- <a href="#"><i class="icon-facebook"></i></a> -->
        <a href="#"><i class="icon-twitter"></i></a>
        <a href="#"><i class="icon-github-circled"></i></a>
        <!-- <a href="#"><i class="icon-instagram"></i></a> -->
      </div><!-- .sociales .col-4 .mt-5 -->
    </div><!-- .row .text-center .justify-content-center -->
  </div><!-- .container --> 
</footer>
