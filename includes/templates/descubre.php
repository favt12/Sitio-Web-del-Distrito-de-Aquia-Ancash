<section id="discover">
	<div class="container-fluid">
		<div class="row">
			<div class="title-contenedor col-12 text-center">
				<h2>DESCUBRE</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="discover col">
				<h3 class="my-4">DESCUBRE AQUIA</h3>
				<p class="text-justify">El distrito de Aquía es uno de los quince distritos de la provincia de Bolognesi, ubicado en el departamento de Áncash, en el Perú. Limita al norte con la provincia de Huari, al este con el distrito de Huallanca y el distrito de Huasta, al sur con el distrito de Chiquián y al oeste con la provincia de Recuay.	</p>
				<p>Los primeros pobladores de esta zona llegaron desde Chavín, trayendo consigo su fé religiosa y con ello a su dios el Apu Cóndor; tuvieron como su capital al cerro Ichik Aynuck, hoy llamado Jerusalén. El distrito fue creado el 2 de enero de 1857, en el gobierno del Presidente Ramón Castilla.</p>
			</div>
		</div>

		<div class="discover-content row">
			<div class="col">
				<div class="card">
							<nav class="nav-discover">
								<div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Costumbres y Danzas</a>
									<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lugares Turisticos</a>
								</div>
							</nav>

						<div class="cards card-body">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<?php require_once 'includes/templates/costumbres-danzas.php' ?>
								</div>
								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<?php require_once 'includes/templates/lugares-turisticos.php' ?>
								</div>
							</div>
						</div><!-- .cards .card-body -->
					</div><!-- .card -->
				</div>

			</div><!-- .discover-content .row -->
	</div><!-- .container -->

</section>
