<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Empresa consultora">
	<meta name="keywords" content="modelos, estadística, matemáticas, score">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css?wg">
	<title>Analítica y visualización</title>
</head>

<body>
	<header>
		<div class="container">
			<img src="../img/principal.jpg" alt="Logo de la empresa" class="logo">
			<nav>
				<a href="../index.php">INICIO</a>
				<a href="nosotros.html">NOSOTROS</a>
				<a href="servicios.html">SERVICIOS</a>
				<a href="usuarios.php">USUARIOS</a>
				<a href="ubicacion.html">UBICACIÓN</a>
			</nav>
			<a href="#" class="hambur"><i class="fas fa-bars"></i></a>
		</div>
	</header>
	<main>
		<h2>
			Usuarios de la empresa
		</h2>
		<?php
			include('../dll/configurar.php');
			include('../dll/class_mysqli.php');
			$conexion=new clase_mysqli();
			$conexion->conectar(BDHOST, DBUSER, DBPASS, DBNAME);
			if($conexion){
				echo "La conexión fue satisfactoria";
			}else{
				echo "Error en la conexión a la base de datos";
			}

		?>
	</main>

		<footer class="seccion">
			<div class="container">
				<div class="fila">
					<div class="columna columna-25 columna-mobile-100">
						<img src="../img/pie.png" alt="logo del pie" class="logo-blanco">
						<p>El conocimiento al servicio de la sociedad.</p>
					</div>
					<div class="columna columna-25">
						<h3>Contactos</h3>
						<ul>
							<li><a href="#">Dirección</a></li>
							<li><a href="#">Teléfonos</a></li>
							<li><a href="#">Correo</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Videos</h3>
						<iframe src="https://www.youtube.com/embed/ZLWdbqtVWqE" title="YouTube video player"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
					<div class="partFooter">
						<aside>
							<h3>Redes Sociales</h3>
							<div class="social-media">
								<i class="fab fa-facebook-f"></i>
								<i class="fab fa-twitter"></i>
								<i class="fab fa-instagram"></i>
								<i class="fab fa-youtube"></i>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div class="pie">
				<div class="container">
					&copy; 2022 - Todos los derechos reservados wggualotuna@utpl.edu.ec
				</div>
			</div>
		</footer>
</body>

</html>