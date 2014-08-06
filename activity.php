<?php 

	$array = [

	"Hack@Tejas Hackaton",
	"Startup Weekend Uniandes!"
	
	];

	$id = $_GET["id"];

	$pageTitle = $array [$id].' - ';

	$proyectos = './actividades.php';
	$index = './index.php';

	include './include/header.php';
	include './actividades/'.$id.'.php';
	include './include/footer.php';

?>