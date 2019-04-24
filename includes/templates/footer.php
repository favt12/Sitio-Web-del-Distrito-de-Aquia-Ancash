<footer>
  <div class="container-fluid">
    <div class="footer row text-center justify-content-center">
      <div class="col-8">
        <h6 class="h1 mt-5">CONTACTO</h6>
        <form method="POST" action="https://formspree.io/alexis_22_95@hotmail.com" class="formulario mt-5">
            <div class="form-group row">
              <div class="col-12 col-md-6">
                <input type="text" placeholder="Nombre y Apellidos" name="name" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
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

        <div class="w-100"></div>

        <div class="col-4 mt-5">
          <h4><small>Company</small> | Telvas</h4>
        </div><!-- .col-4 mt-5-->

        <div class="col-4 mt-5">
          <h6>COPYRIGHT © <small class="Footer-year"></small></h6>
          <h6><small>Designed & Developed by Telvas</small></h6>
        </div><!-- .col-4 .mt-5 -->

        <div class="sociales col-4 mt-5">
          <!-- <a href="#"><i class="icon-facebook"></i></a> -->
          <a href="#"><i class="icon-twitter"></i></a>
          <a href="#"><i class="icon-github-circled"></i></a>
          <!-- <a href="#"><i class="icon-instagram"></i></a> -->
        </div><!-- .sociales .col-4 .mt-5 -->

    </div><!-- .footer .row .text-center .justify-content-center -->
  </div><!-- .container-fluid -->
</footer>
