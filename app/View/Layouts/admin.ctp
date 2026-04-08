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

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<?php echo $this->Html->script('main.js'); ?>
</head>

<body>
	<div id="container">
		<div id="header">
			<div class="container">
				<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
					<a href="<?php echo $this->Html->url(array('controller' => 'Principal', 'action' => 'index')); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
						<span class="fs-3 text-dark fw-bold">
							<?php echo $this->Html->image('logo juegos.png', array('alt' => 'CodePlay', 'width' => '40', 'height' => '40')); ?>
							CodePlay Gaming Center
						</span>
					</a>
					<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
						<li class="nav-item fs-5"><a href="<?php echo $this->Html->url(array('controller' => 'Principal', 'action' => 'index')); ?>" class="nav-link text-dark">Consolas</a></li>
						<li class="nav-item fs-5"><a href="<?php echo $this->Html->url(array('controller' => 'Principal', 'action' => 'listar')); ?>" class="nav-link text-dark">Usuarios</a></li>
						<li class="nav-item fs-5"><a href="<?php echo $this->Html->url(array('controller' => 'Principal', 'action' => 'agregar')); ?>" class="nav-link text-dark">Registrar</a></li>
					</ul>
				</header>
			</div>
		</div>

		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
			<div class="container text-center py-4 mt-5">
				<p class="text-muted">© 2025 CodePlay Gaming Center. Todos los derechos reservados.</p>
			</div>
		</div>
	</div>

	<?php echo $this->fetch('script'); ?>
</body>

</html>