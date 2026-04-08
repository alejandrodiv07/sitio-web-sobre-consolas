<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('style');
	echo $this->Html->css('custom-palette');
	echo $this->Html->css('utilities');
	echo $this->fetch('meta');
	?>

</head>

<body>
	<div id="container">
		<div id="header">
			<div class="container">
				<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
					<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
						<svg class="bi me-2" width="40" height="32">
							<use xlink:href="#bootstrap"></use>
						</svg>
						<span class="fs-3 text-dark fw-bold">
							<?php echo $this->Html->image('logo juegos.png', array('alt' => 'CodePlay', 'width' => '40', 'height' => '40')); ?>
							CodePlay
						</span>
					</a>
					<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
						<li class="nav-item fs-5"><a href="#juegos" class="nav-link text-dark">Juegos</a></li>
						<li class="nav-item fs-5"><a href="#playstation" class="nav-link text-dark">PlayStation</a></li>
						<li class="nav-item fs-5"><a href="#xbox" class="nav-link text-dark">Xbox</a></li>
						<li class="nav-item fs-5"><a href="#nintendo" class="nav-link text-dark">Nintendo</a></li>
						<li class="nav-item fs-5"><a href="<?php echo $this->Html->url(array('controller' => 'Principal', 'action' => 'listar')); ?>" class="nav-link text-dark">Registros</a></li>
					</ul>
					<div class="text-end">
						<a href="<?php echo $this->Html->url(array('controller' => 'Principal', 'action' => 'agregar')); ?>" class="btn btn-gaming me-3">
							<btn class="btn btn-dark mb-3">login</btn>
						</a>
				</header>
			</div>
		</div>

		<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item">
					<?php echo $this->Html->image('consola1.webp', array(
						'alt' => 'CodePlay',
						'class' => 'w-100 d-block',
						'style' => 'height: 500px; object-fit: cover;'
					)); ?>
					<div class="container">
						<div class="">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<?php echo $this->Html->image('juego1.webp', array(
						'alt' => 'CodePlay Slide 2',
						'class' => 'w-100 d-block',
						'style' => 'height: 500px; object-fit: cover;'
					)); ?>
					<div class="container">
						<div class="">

						</div>
					</div>
				</div>
				<div class="carousel-item active">
					<?php echo $this->Html->image('juego2.webp', array(
						'alt' => 'CodePlay Slide 3',
						'class' => 'w-100 d-block',
						'style' => 'height: 500px; object-fit: cover;'
					)); ?>
					<div class="container">
						<div class="">
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<!-- Sección de consolas - ancho completo -->
		<div class="container-fluid py-5 bg-light">
			<div class="container">
				<div class="row g-4 text-center">
					<div class="col-lg-4">
						<?php echo $this->Html->image('nintendo.webp', array(
							'alt' => 'Nintendo Console',
							'class' => 'rounded-circle',
							'width' => '140',
							'height' => '140',
							'style' => 'object-fit: cover;'
						)); ?>
						<h2 class="fw-normal">Nintendo</h2>
						<p>Diversión innovadora y personajes icónicos para todas las edades.</p>
						<p><a class="btn btn-secondary" href="#nintendo">View details »</a></p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4">
						<?php echo $this->Html->image('ps5.webp', array(
							'alt' => 'PlayStation 5',
							'class' => 'rounded-circle',
							'width' => '140',
							'height' => '140',
							'style' => 'object-fit: cover;'
						)); ?>
						<h2 class="fw-normal">PlayStation</h2>
						<p>Experiencias cinematográficas y grandes juegos exclusivos.</p>
						<p><a class="btn btn-secondary" href="#playstation">View details »</a></p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4">
						<?php echo $this->Html->image('xbox.webp', array(
							'alt' => 'Xbox Console',
							'class' => 'rounded-circle',
							'width' => '140',
							'height' => '140',
							'style' => 'object-fit: cover;'
						)); ?>
						<h2 class="fw-normal">Xbox</h2>
						<p>Potencia de hardware y el ecosistema de servicios (Game Pass).</p>
						<p><a class="btn btn-secondary" href="#xbox">View details »</a></p>
					</div><!-- /.col-lg-4 -->
				</div>
			</div>
		</div>

		<!-- catalogo de juegos -->
		<section id="juegos" class="py-5 bg-light">
			<div class="container">
				<div class="text-center mb-5">
					<h2 class="display-4 fw-bold gaming-header text-dark">
						<i class="fas fa-fire me-3 text-danger"></i>Catálogo de Juegos
					</h2>
					<p class="fs-5 text-muted">Descubre nuestra increíble selección de videojuegos épicos</p>
				</div>
				<div class="album py-5">
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
						<div class="col">
							<div class="card shadow-sm">
								<?php echo $this->Html->image('Bloodborne.jpg', array(
									'alt' => 'Bloodborne',
									'class' => 'card-img-top',
									'style' => 'height: 225px; object-fit: cover;'
								)); ?>
								<div class="card-body">
									<h5 class="card-title fw-bold">
										<i class="fas fa-skull me-2 text-danger"></i>Bloodborne
									</h5>
									<p class="card-text">Una épica aventura en el oscuro mundo de Bloodborne, donde los cazadores se enfrentan a horrores inimaginables.</p>
									<div class="d-flex justify-content-between align-items-center">
										<span class="price-tag text-primary fs-5">
											<i class="fas fa-euro-sign"></i>59.99
										</span>
										<span class="badge bg-danger">
											<i class="fas fa-fire me-1"></i>Épico
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card shadow-sm">
								<?php echo $this->Html->image('Red dead redemption.avif', array(
									'alt' => 'Red Dead Redemption',
									'class' => 'card-img-top',
									'style' => 'height: 225px; object-fit: cover;'
								)); ?>
								<div class="card-body">
									<h5 class="card-title">Red Dead Redemption</h5>
									<p class="card-text">Una historia épica de la vida en el salvaje oeste, donde la lealtad y la traición van de la mano.</p>
									<div class="d-flex justify-content-between align-items-center">
										<small class="text-primary fw-bold">€59.99</small>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card shadow-sm">
								<?php echo $this->Html->image('Ghost_of_Tsushima.jpg', array(
									'alt' => 'Ghost of Tsushima',
									'class' => 'card-img-top',
									'style' => 'height: 225px; object-fit: cover;'
								)); ?>
								<div class="card-body">
									<h5 class="card-title">Ghost of Tsushima</h5>
									<p class="card-text">Una historia épica de la vida en el Japón feudal, donde un samurái debe luchar contra los invasores mongoles.</p>
									<div class="d-flex justify-content-between align-items-center">
										<small class="text-primary fw-bold">€59.99</small>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card shadow-sm">
								<?php echo $this->Html->image('elden ring.jpg', array(
									'alt' => 'Elden Ring',
									'class' => 'card-img-top',
									'style' => 'height: 225px; object-fit: cover;'
								)); ?>
								<div class="card-body">
									<h5 class="card-title">Elden Ring</h5>
									<p class="card-text">Una historia épica de un mundo abierto lleno de aventuras, donde los jugadores deben enfrentarse a poderosos enemigos y desentrañar los secretos de Elden Ring.</p>
									<div class="d-flex justify-content-between align-items-center">
										<small class="text-primary fw-bold">€59.99</small>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card shadow-sm">
								<?php echo $this->Html->image('ds3.jpg', array(
									'alt' => 'Dark Souls 3',
									'class' => 'card-img-top',
									'style' => 'height: 225px; object-fit: cover;'
								)); ?>
								<div class="card-body">
									<h5 class="card-title">Dark Souls 3</h5>
									<p class="card-text">Una historia épica de un mundo abierto lleno de aventuras, donde los jugadores deben enfrentarse a poderosos enemigos y desentrañar los secretos de Dark Souls 3.</p>
									<div class="d-flex justify-content-between align-items-center">
										<small class="text-primary fw-bold">€59.99</small>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card shadow-sm">
								<?php echo $this->Html->image('sekiro.jpg', array(
									'alt' => 'Sekiro: Shadows Die Twice',
									'class' => 'card-img-top',
									'style' => 'height: 225px; object-fit: cover;'
								)); ?>
								<div class="card-body">
									<h5 class="card-title">Sekiro: Shadows Die Twice</h5>
									<p class="card-text">Una historia épica de un mundo abierto lleno de aventuras, donde los jugadores deben enfrentarse a poderosos enemigos y desentrañar los secretos de Sekiro: Shadows Die Twice.</p>
									<div class="d-flex justify-content-between align-items-center">
										<small class="text-primary fw-bold">€59.99</small>
									</div>
								</div>
							</div>
						</div>
		</section>

		<!-- Sección PlayStation Exclusivos -->
		<section id="playstation" class="py-5 bg-primary">
			<div class="container">
				<div class="row align-items-center g-5 py-4">
					<div class="col-12 col-lg-6">
						<?php echo $this->Html->image('ps5consola.webp', array(
							'alt' => 'PlayStation 5 Console',
							'class' => 'img-fluid rounded-3 shadow-lg'
						)); ?>
					</div>
					<div class="col-12 col-lg-6 text-center text-lg-start">
						<h1 class="display-5 fw-bold lh-sm mb-4 text-white">PlayStation 5</h1>
						<p class="fs-6 mb-4 text-white-50">
							Experimenta la velocidad ultrarrápida con un SSD de alta velocidad, una inmersión más profunda con retroalimentación háptica, gatillos adaptativos y audio 3D.
						</p>
					</div>
				</div>

				<!-- Exclusivos PlayStation -->
				<div class="row g-4 mt-4">
					<div class="col-12">
						<h3 class="text-white mb-4 text-center gaming-header">
							<i class="fab fa-playstation me-2"></i>Exclusivos PlayStation
						</h3>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('spiderman2.avif', array(
								'alt' => 'Spider-Man 2',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h6 class="card-title fw-bold">Spider-Man 2</h6>
									<p class="card-text small">€79.99</p>
									<span class="badge bg-primary">PS5 Exclusivo</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('god-of-war.jpg', array(
								'alt' => 'God of War Ragnarök',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h6 class="card-title fw-bold">God of War Ragnarök</h6>
									<p class="card-text small">€69.99</p>
									<span class="badge bg-primary">PS5/PS4</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('horizon-forbidden.webp', array(
								'alt' => 'Horizon Forbidden West',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h6 class="card-title fw-bold">Horizon Forbidden West</h6>
									<p class="card-text small">€59.99</p>
									<span class="badge bg-primary">PS5/PS4</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('ratchet-clank.jpg', array(
								'alt' => 'Ratchet & Clank',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h6 class="card-title fw-bold">Ratchet & Clank</h6>
									<p class="card-text small">€49.99</p>
									<span class="badge bg-primary">PS5 Exclusivo</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Ghost of Yōtei Edición Limitada -->
				<div class="row g-4 mt-5">
					<div class="col-12">
						<div class="card bg-dark text-white overflow-hidden">
							<div class="row g-0">
								<div class="col-md-8">
									<?php echo $this->Html->image('ps5-seccion.webp', array(
										'alt' => 'Ghost of Yōtei PlayStation 5',
										'class' => 'img-fluid h-100',
										'style' => 'object-fit: cover; min-height: 300px;'
									)); ?>
								</div>
								<div class="col-md-4">
									<div class="card-body d-flex flex-column justify-content-center h-100 p-5">
										<h3 class="card-title fw-bold mb-3 text-white">Ghost of Yōtei™</h3>
										<p class="card-text fs-6 mb-4 text-white-50">Packs de consola y accesorios de Edición Limitada inspirados en Ghost of Tsushima™: Director's Cut, disponibles para reservar ya.</p>
										<div class="mb-3">
											<span class="badge bg-primary fs-6 p-2">Edición Limitada</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>

		<!-- Sección Nintendo Exclusiva -->
		<section id="nintendo" class="py-5 bg-danger">
			<div class="container">
				<div class="row align-items-center g-5 py-4">
					<div class="col-12 col-lg-6">
						<?php echo $this->Html->image('nintendo-switch-oled.webp', array(
							'alt' => 'Nintendo Switch OLED',
							'class' => 'img-fluid rounded-3 shadow-lg'
						)); ?>
					</div>
					<div class="col-12 col-lg-6 text-center text-lg-start">
						<h1 class="display-5 fw-bold lh-sm mb-4 text-white">Nintendo Switch OLED</h1>
						<p class="fs-6 mb-4 text-white-50">
							Experimenta los colores vibrantes y el contraste nítido de la pantalla OLED de 7 pulgadas cuando juegas en modo portátil o sobremesa.
						</p>
					</div>
				</div>

				<!-- Juegos destacados Nintendo -->
				<div class="row g-4 mt-4">
					<div class="col-12">
						<h3 class="text-white mb-4 text-center gaming-header">
							<i class="fab fa-nintendo-switch me-2"></i>Juegos Exclusivos Nintendo
						</h3>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('mario-odyssey.avif', array(
								'alt' => 'Super Mario Odyssey',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Super Mario Odyssey</h5>
									<p class="card-text">€49.99</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('zelda-tears.jpg', array(
								'alt' => 'Zelda Tears of the Kingdom',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Zelda: Tears of the Kingdom</h5>
									<p class="card-text">€69.99</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('mario-kart.avif', array(
								'alt' => 'Mario Kart 8 Deluxe',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Mario Kart 8 Deluxe</h5>
									<p class="card-text">€54.99</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('splatoon3.avif', array(
								'alt' => 'Splatoon 3',
								'class' => 'card-img',
								'style' => 'height: 200px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Splatoon 3</h5>
									<p class="card-text">€59.99</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Sección Xbox Exclusivos -->
		<section id="xbox" class="py-5 bg-success">
			<div class="container">
				<div class="row flex-lg-row-reverse align-items-center g-5 py-4">
					<div class="col-12 col-lg-6">
						<?php echo $this->Html->image('xbox-series.jpg', array(
							'alt' => 'Xbox Series X/S',
							'class' => 'img-fluid rounded-3 shadow-lg'
						)); ?>
					</div>
					<div class="col-12 col-lg-6 text-center text-lg-start">
						<h1 class="display-5 fw-bold lh-sm mb-4 text-white">Xbox Series X|S</h1>
						<p class="fs-6 mb-4 text-white-50">
							La consola Xbox más rápida y potente de la historia. Juega a miles de títulos de cuatro generaciones de Xbox con compatibilidad con versiones anteriores.
						</p>
					</div>
				</div>

				<!-- Juegos destacados Xbox -->
				<div class="row g-4 mt-4">
					<div class="col-12">
						<h3 class="text-white mb-4 text-center gaming-header">
							<i class="fab fa-xbox me-2"></i>Exclusivos Xbox Game Studios
						</h3>
					</div>
					<div class="col-md-4">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('halo-infinite.jpg', array(
								'alt' => 'Halo Infinite',
								'class' => 'card-img',
								'style' => 'height: 250px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Halo Infinite</h5>
									<p class="card-text">Incluido en Game Pass</p>
									<span class="badge bg-success">Disponible ahora</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('forza-horizon.avif', array(
								'alt' => 'Forza Horizon 5',
								'class' => 'card-img',
								'style' => 'height: 250px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Forza Horizon 5</h5>
									<p class="card-text">Incluido en Game Pass</p>
									<span class="badge bg-success">Disponible ahora</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card bg-dark text-white">
							<?php echo $this->Html->image('flight-simulator.jpg', array(
								'alt' => 'Microsoft Flight Simulator',
								'class' => 'card-img',
								'style' => 'height: 250px; object-fit: cover; opacity: 0.8;'
							)); ?>
							<div class="card-img-overlay d-flex align-items-end">
								<div>
									<h5 class="card-title fw-bold">Microsoft Flight Simulator</h5>
									<p class="card-text">Incluido en Game Pass</p>
									<span class="badge bg-success">Disponible ahora</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Game Pass Ultimate -->
				<div class="row g-4 mt-5">
					<div class="col-12">
						<div class="card bg-dark text-white overflow-hidden">
							<div class="row g-0">
								<div class="col-md-4">
									<div class="card-body d-flex flex-column justify-content-center h-100 p-5">
										<h3 class="card-title fw-bold mb-3 text-white gaming-header">
											<i class="fas fa-infinity me-2"></i>Game Pass Ultimate
										</h3>
										<p class="card-text fs-6 mb-4 text-white-50">Los suscriptores a Ultimate y PC pueden jugar a nuevos juegos el mismo día de su lanzamiento, incluidos nuevos juegos publicados por Xbox y juegos de terceros.</p>
										<div class="mb-3">
											<span class="badge bg-success fs-6 p-2">
												<i class="fas fa-rocket me-1"></i>Primer día disponible
											</span>
										</div>
										<a href="https://www.xbox.com/es-ES/xbox-game-pass" target="_blank" class="btn btn-light btn-lg fw-bold">
											<i class="fas fa-play me-2"></i>Suscribirse ahora
										</a>
									</div>
								</div>
								<div class="col-md-8">
									<?php echo $this->Html->image('gamepass.jpg', array(
										'alt' => 'Game Pass',
										'class' => 'img-fluid h-100',
										'style' => 'object-fit: cover; min-height: 300px;'
									)); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="content">
			<main>
				<?php echo $this->Flash->render(); ?>

				<?php echo $this->fetch('content'); ?>
			</main>
		</div>
		<div id="footer" class="bg-white">
			<div class="container">
				<footer class="py-4 my-4">
					<ul class="nav justify-content-center border-bottom pb-3 mb-3">
						<li class="nav-item"><a href="#juegos" class="nav-link px-2 text-body-secondary">Juegos</a></li>
						<li class="nav-item"><a href="#nintendo" class="nav-link px-2 text-body-secondary">Nintendo</a></li>
						<li class="nav-item"><a href="#xbox" class="nav-link px-2 text-body-secondary">Xbox</a></li>
						<li class="nav-item"><a href="#playstation" class="nav-link px-2 text-body-secondary">PlayStation</a></li>
					</ul>
					<p class="text-center text-body-secondary">© 2025 CodePlay Gaming Center. Todos los derechos reservados.</p>
				</footer>
			</div>
		</div>
	</div>
	</div>
	<input type="hidden" id="baseUrl" value="<?php echo $this->webroot; ?>">
	<?php
	echo $this->Html->script('jquery-3.6.0.min');
	echo $this->Html->script('bootstrap.bundle.min');
	echo $this->Html->script('main');
	?>

</body>

</html>