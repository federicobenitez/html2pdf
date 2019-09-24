<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Generar PDF con PHP</title>
	<style type="text/css">
		h2{
			color:blue;
		}
		#cajas{
			width: 100%;
		}
		.caja{
			width: 100%;
			height: 105px;
			border: 1px solid black;
			background: #ccc;
			margin-bottom: 5px; 
		} 
		.roja{
			background: red;
		}
		#cabecera img{
			float: right; /*las imagenes permiten flotarlas*/
		}

	</style>
</head>
<body>
	<?php //var_dump($_POST) //imprime todos los valores enviados por post; ?>
	<?php if(isset($_POST['titulo'])): ?>
		<div id="cabecera">
			<img src="https://www.html2pdf.fr/img/_langue/es/logo.gif">
			<h1> <?=$_POST['titulo'] ?> </h1>
		</div>
	<?php endif; ?>	

	<h2>Más información</h2>
	<div id="cajas">
		<div class="caja roja"></div>
		<div class="caja"></div>
		<div class="caja"></div>
		<div class="caja"></div>
	</div>

	<table border="1">
		<tr>
			<td>Curso de php</td>
			<td>Desarrollar una red social</td>
		</tr>
		<tr>
			<td>Curso de angular</td>
			<td>Curso de html</td>
		</tr>
	</table>
</body>
</html>