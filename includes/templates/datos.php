<section class="datos" id="datos">
  <div class="container-fluid">
    <div class="row">
      <div class="title-contenedor title-contenedor-date col-12 text-center">
        <h2>DATOS UTILES</h2>
      </div>
    </div>

    <div class="row justify-content-between">

      <div class="data-content-right col-12 col-md-1 ">
        <div class="data-content btn-group mb-5 col-12 justify-content-center" role="group" aria-label="First group">
          <div class="data-content-btn  nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <a class="btn btn-secondary mb-2 mx-2 nav-item nav-link active rounded" id="nav-calendar-tab" data-toggle="tab" href="#nav-calendar" role="tab" aria-controls="nav-calendar" aria-selected="true"><img src="img/calendar.png" alt=""></a>
            <a class="btn btn-dark my-2 mx-2 nav-item nav-link rounded" id="nav-movil-tab" data-toggle="tab" href="#nav-movil" role="tab" aria-controls="nav-movil" aria-selected="false"><img src="img/autobus.png" alt=""></a>
            <a class="btn btn-warning my-2 mx-2 nav-item nav-link rounded" id="nav-ambulance-tab" data-toggle="tab" href="#nav-ambulance" role="tab" aria-controls="nav-ambulance" aria-selected="false"><img src="img/cruzroja.png" alt=""></a>
            <a class="btn btn-success my-2 mx-2 nav-item nav-link rounded" id="nav-dollar-tab" data-toggle="tab" href="#nav-dollar" role="tab" aria-controls="nav-dollar" aria-selected="false"><img src="img/moneda.png" alt=""></a>
            <a class="btn btn-light my-2 mx-2 nav-item nav-link rounded" id="nav-clima-tab" data-toggle="tab" href="#nav-clima" role="tab" aria-controls="nav-clima" aria-selected="false"><img src="img/clima.png" alt=""></a>
          </div><!-- .data-content-right .col-3 .col-md-2 .d-flex .justify-content-start -->
      </div>
    </div>

      <div class="data-content-left col col-md-10">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-calendar" role="tabpanel" aria-labelledby="nav-calendar-tab">
            <?php require_once 'includes/templates/calendar.php' ?>
          </div>
          <div class="tab-pane fade" id="nav-movil" role="tabpanel" aria-labelledby="nav-movil-tab">
            <div class="col-12 col-md-8">
              <h3 class="mb-5 text-center">MOVILIDAD</h3>
              <div class="data-icon row justify-content-center"><i class="icon-taxi"></i></div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-ambulance" role="tabpanel" aria-labelledby="nav-ambulance-tab">
            <div class="col-12 col-md-8">
              <h3 class="text-center mb-5">EMERGENCIA</h3>
              <div class="data-icon row justify-content-center"><i class="icon-ambulance"></i></div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-dollar" role="tabpanel" aria-labelledby="nav-dollar-tab">
            <div class="col-12 col-md-8">
              <h3 class="text-center mb-5">MONEDA</h3>
              <div class="data-icon row justify-content-center"><i class="icon-dollar"></i></div>
              <ul>
                <li><p><small><strong>TIPO DE MONEDA:</strong> Nuevo Sol PERÚ.</small></p></li>
              </ul>
              <div class="row justify-content-center mt-5">
                <iframe id="tmcmini" src="https://themoneyconverter.com/ES/MoneyConverter.aspx?from=USD&amp;to=PEN" style="width: 175px; height: 202px; border: none; background-color: #ffffff;" scrolling="no" marginwidth="0" marginheight="0"></iframe>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-clima" role="tabpanel" aria-labelledby="nav-clima-tab">
                <div class="col-12 col-md-8">
                    <h3 class="text-center mb-5">CLIMA</h3>
                  <div class="data-icon row justify-content-center"><i class="icon-cloud-sun"></i>                <!-- www.tutiempo.net - Ancho:398px - Alto:89px -->
                    <div class="w-100"></div>
                    <div class="ml-2 pt-3" id="TT_JiJEEE11EI1adehALAwzDzjjD6n1LAE2Ld1tkZyoK1zkk11E1"></div>
                  </div>
                </div>
            </div>

          </div>
        </div><!-- .data-content-left -->
      </div><!-- .row .justify-content-between -->
    </div><!-- .container-fluid -->
</section>
