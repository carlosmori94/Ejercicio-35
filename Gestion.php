<?php
require_once"Funciones.php";
$ruta = $_POST["ruta"];

	$contenido = array();
	$contenido = Funciones::Leer($ruta);
	Funciones::Guardar($contenido);
?>