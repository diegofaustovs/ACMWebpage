<?php 

	$array = [

	"HorarioLab",
	"ClasifiTeca",
	"Bootcamps",
	
	];

	$id = $_GET["id"];

	$pageTitle = $array [$id].' - ';

	$proyectos = './proyectos.php';
	$index = './index.php';

	include './include/header.php';
	include './proyectos/'.$id.'.php';
	include './include/footer.php';

?>