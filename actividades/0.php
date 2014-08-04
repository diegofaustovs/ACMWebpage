<?php

$picture = '<img src="./actividades/0/0.jpg" class="imag img-thumbnail"><br><br>';

$descr = 'Nuestro primer hackathon oficial fue todo un &eacute;xito! Fue una sesi&oacute;n llena de pizza, cerveza, mucho c&oacute;digo y mucha actitud! M&aacute;s de 20 personas escribieron c&oacute;digo durante todo un d&iacute;a en m&aacute;s de 6 proyectos proyectos geniales!<br>
El objetivo del hackathon fue aprender mas sobre tecnolog&iacute;as novedosas de desarrollo web y m&oacute;vil, y obtener experiencia trabajando en proyectos fuera del alcance de las clases de la Universidad, y sobre todo pasarala bueno haciendo lo que nos gusta: escribiendo c&oacute;digo! El objetivo fue cumplido y nos estrellamos con diferentes tecnolog&iacute;as como Ruby on Rails, Django, jQuery, Git/Github entre muchas otras!<br>
Los proyectos trabajdos durante la sesi&oacute;n fueron:<br>
<ul>
<li>CVim</li>
<li>Bluefoot</li>
<li>Dexterior</li>
<li>GET</li>
<li>Portal Viaje</li>
<li>Bazar M&oacute;vil</li>
</ul><br>
Esperamos realizar muchos hackathons m&aacute;s, m&aacute;s grandes y mejores, y aprender mucho de &eacute;stas experiencias!';

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