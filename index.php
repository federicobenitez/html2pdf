<?php
//require __DIR__'./vendor/autoload.php'; //DIR = la ruta absoluta, opcional
require './vendor/autoload.php'; 
use Spipu\Html2Pdf\Html2Pdf;

if(isset($_POST['crear'])){ 
	ob_start();//recoge en el buffer el contenido de printView.php
	require_once 'printView.php';
	$html = ob_get_clean();

	$html2pdf = new Html2Pdf('p', 'A4','es','true', 'UTF-8'); //papel, idioma y codificacion

	$html2pdf->writeHTML($html);
	$html2pdf->output('archivo.pdf');
}?>

<form action="" method="post">
	<input type="text" name="titulo" placeholder="Título">
	<input type="submit" name="crear" value="crear pdf">
</form>