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
              <h3 class="mb-5">¿Cómo llégo?</h3>
              <p>Para llegar al distrito de Aquia desde Lima, existen dos rutas: Una es la que parte del km 183 de la Panamericana Norte (Paramonga) y tomar el desvío de la carretera que va hacia Huaraz, a la altura de Conococha tomar el desvío que llega hasta Chiquián y termina en el pueblo de Aquia.
                La otra ruta también tiene el mismo recorrido desde la Panamericana Norte (Paramonga) hasta Conococha solo que de ahí se debe tomar la carretera que va a Antamina y hasta el cruce llamado por los pobladores de la zona como BY PASE de ahí tomar el desvío para racrachacra la cual los lleva directo hasta Aquia en apenas 15 minutos.</p>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-ambulance" role="tabpanel" aria-labelledby="nav-ambulance-tab">
            dxdxdxd
          </div>
          <div class="tab-pane fade" id="nav-dollar" role="tabpanel" aria-labelledby="nav-dollar-tab">
            ohohoh
          </div>
          <div class="tab-pane fade" id="nav-clima" role="tabpanel" aria-labelledby="nav-clima-tab">
            <div class="row">
                <div class="mb-5">
                  <h3 class="ml-5">CLIMA</h3>
                </div>
                <div class="w-100"></div>
                <!-- www.tutiempo.net - Ancho:398px - Alto:89px -->
                <div class="ml-2" id="TT_JiJEEE11EI1adehALAwzDzjjD6n1LAE2Ld1tkZyoK1zkk11E1"></div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- .row -->
  </div><!-- .container-fluid -->
</section>
