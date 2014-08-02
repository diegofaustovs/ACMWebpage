<?php 

	$array = [

	1 => "Bootcamps",
	2 => "ClasifiTeca",
	3 => "",

	];

	$id = $_GET["id"];

	$pageTitle = $array [$id].' - ';

	$proyectos = './proyectos.php';
	$index = './index.php';

	include './include/header.php';
	include $id.'.php';
	include './include/footer.php';

?>