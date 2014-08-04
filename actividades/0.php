<?php

$picture = '<img src="./actividades/0/0.jpg" class="imag img-thumbnail"><br><br>';

$descr = '<p>Nuestro primer hackathon oficial fue todo un éxito! Fue una sesión llena de pizza, cerveza, mucho código y mucha actitud! Más de 20 personas escribieron código durante todo un día en más de 6 proyectos proyectos geniales!</p>
<p>El objetivo del hackathon fue aprender mas sobre tecnologías novedosas de desarrollo web y móvil, y obtener experiencia trabajando en proyectos fuera del alcance de las clases de la Universidad, y sobre todo pasarala bueno haciendo lo que nos gusta: escribiendo código! El objetivo fue cumplido y nos estrellamos con diferentes tecnologías como Ruby on Rails, Django, jQuery, Git/Github entre muchas otras!</p>
<p>Los proyectos trabajdos durante la sesión fueron:</p><br>
<ul>
<li>CVim</li>
<li>Bluefoot</li>
<li>Dexterior</li>
<li>GET</li>
<li>Portal Viaje</li>
<li>Bazar Móvil</li>
</ul><br>
<p>Esperamos realizar muchos hackathons más, más grandes y mejores, y aprender mucho de éstas experiencias!</p>';

if (isset($pageTitle))
{
	if ($pageTitle == "Actividades - " )
	{
		echo $picture.ellipse($descr, 500, '0');
	}

	else
	{
		$button = '<div class="col-md-10 col-sm-6 col-xs-8""></div><div>  <button type="button" class="btn btn-default cust" onclick="goBack()"><img src="https://www.cloudcovermusic.com/img/left_arrow2.png" style="height:1.5em;"> Go Back</img></button></div>';
		echo '<p>'.$picture.'<div class="jumbotron cust">'.$descr.'<br><br>'.$button.'</div></p>';
	}
}


?>