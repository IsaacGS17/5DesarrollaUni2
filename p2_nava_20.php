<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Isaac Granados</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/for.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_nava_20_php/ifelse.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						Es una estructura de programacion llamada for el cual es un bucle que su unico objetivo cumplir la condicion por ejmplo<br>
						en el codigo se cumple el codigp de subida de numeros hasta que el num deje de ser menor a 5 y en el segundo resultado la condicion<br>
						es que 5 deje de ser mayor que uno.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>