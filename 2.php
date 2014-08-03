<?php

$picture = '<img src="./img/clasifiteca.png" class="imag img-thumbnail"><br><br>';

$descr = '<a title="ClasifiTeca" href="http://clasificados.uniandes.edu.co" target="_blank">ClasifiTeca</a> es una iniciativa estudiantil que surgi&oacute; dentro del <a title="Startup Criollo" href="http://acm.uniandes.edu.co/startupcriollo">Startup Criollo</a>, un evento del Cap&iacute;tulo ACM. El proyecto surgi&oacute; con la motivaci&oacute;n de resolver un problema constante en la Universidad: encontrar libros para las clases. Se pretend&iacute;a resolver el problema a trav&eacute;s de una plataforma en la que fuera f&aacute;cil intercambiar libros usados o comprar y vender libros.<br><br>

Desde ese entonces la aplicaci&oacute;n ha evolucionado para convertirse en una comunidad que le permita a los estudiantes intercambiar, comprar y vender cualquier tipo de elementos Universitarios a trav&eacute;s de anuncios. Se ha convertido en un lugar m&aacute;s abierto donde se pueden vender y comprar desde libros, calculadoras o batas, hasta clases de taekwondo.<br><br>

Inicialmente desarrollado en Java y GWT, DOMKEE ahora se ha mudado a un desarrollo en <a title="Ruby on Rails" href="http://rubyonrails.org" target="_blank">Ruby on Rails</a>, utilizando diferentes tecnolog&iacute;as como el <a title="Facebook Developers" href="http://developers.facebook.com" target="_blank">Facebook API</a> y <a title="Twitter Bootstrap" href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a> para el front-end. La aplicaci&oacute;n est&aacute; actualmente montada en los servidores del Cap&iacute;tulo ACM.<br><br>

Al igual que otros proyectos de la ACM, el c&oacute;digo se puede ver en <a title="Github Domkee" href="https://github.com/fernandohur/dmk" target="_blank">GitHub</a>.<br><br>
Invitamos a todas las personas interesadas en apoyar el proyecto y, de paso, aprender m&aacute;s sobre Ruby-Rails y/o Twitter Bootstrap a expresar sus ideas y opiniones!<br><br><br>

<strong>Liderando</strong><br>
<ul>
<li>Fernando Hurtado</li>
</ul>
<br><strong>Involucrados</strong><br>
<ul>
<li>Carlos Duque</li>
<li>Camilo Vargas</li>
<li>Mario Suarez</li>
<li>Rafael L&oacute;pez</li>
<li>Juan Tejada</li>
</ul>
<br><strong>Tecnologias:</strong> Ruby, Rails, HTML5, CSS, Javascript y JQuery.<br>';

if (isset($pageTitle))
{
	if ($pageTitle == "Proyectos - " )
	{
		echo $picture.ellipse($descr, 500, '2');
	}

	else
	{
		$button = '<div class="col-md-10 col-sm-6 col-xs-8""></div><div>  <button type="button" class="btn btn-default cust" onclick="goBack()"><img src="https://www.cloudcovermusic.com/img/left_arrow2.png" style="height:1.5em;"> Go Back</img></button></div>';
		echo '<p>'.$picture.'<div class="jumbotron cust">'.$descr.'<br><br>'.$button.'</div></p>';
	}
}


?>