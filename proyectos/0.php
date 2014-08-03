<?php

$picture = '<img src="./img/horariolab.jpg" class="imag img-thumbnail"><br><br>';

$descr = 'El proyecto <a title="Horariolab" href="http://horario.uniandes.edu.co" target="_blank">Horariolab</a> empez&oacute; en 2011 con la fundaci&oacute;n del Cap&iacute;tulo ACM, y con el impulso de un peque&ntilde;o grupo de estudiantes motivados que ten&iacute;an el prop&oacute;sito de aprender, experimentar, lograr algo m&aacute;s de lo que se hace normalmente en clase, y a&uacute;n m&aacute;s importantemente: hacer lo que les gusta! Adem&aacute;s de esto se buscaba que el proyecto tuviera un impacto positivo y visible sobre la comunidad universitaria, atacando un problema con el que sufr&iacute;amos todos: planear horario.
Horariolab es una aplicaci&oacute;n web  desarrollada por estudiantes que facilita la b&uacute;squeda de cursos y la planeaci&oacute;n de horario para estudiantes de la Universidad de los Andes: es como un “search engine” para cursos, m&aacute;s una interfaz sencilla y amigable de calendario para planear el horario. De &eacute;sta forma se evita el proceso lento y tedioso para planear horario en el que los estudiantes deb&iacute;an navegar listas inmensas de ofertas de cursos y planear su horario de forma dificil: en una hoja de papel o Excel. El principal prop&oacute;sito de Horariolab es que sea sumamente f&aacute;cil construir uno o m&aacute;s horarios de clases, utilizando herramientas gr&aacute;ficas e interactivas para lograrlo, y as&iacute; agilizar el registro de cursos en Banner.
Agradecemos a los m&aacute;s de 10,000 estudiantes que se registraron y utilizaron Horariolab en este periodo de construcci&oacute;n de horario (2013-1)! M&aacute;s de la mitad del total de estudiantes de pregrado. Muchas gracias a todas las personas que han mandado comentarios y sugerencias, TODAS las tenemos en cuenta.
<br><br><strong>Informaci&oacute;n General:</strong><br><br>

<strong>Liderando</strong><br>
<ul>
<li>Juan Sebasti&aacute;n Tejada js.tejada157@uniandes.edu.co</li>
<li>Jorge A L&oacute;pez Silva ja.lopez916@uniandes.edu.co</li>
</ul>
<br>
<strong>Dise&ntilde;o Grafico</strong><br>
<ul>
<li>Ricardo Rambal</li>
</ul>
<br>
<strong>Involucrados</strong><br>
<ul>
<li>Sergio Villegas</li>
<li>Jaime A Romero</li>
<li>Jos&eacute; Luis Romero</li>
<li>Carlos Ball&eacute;n</li>
<li>Camilo Restrepo</li>
<li>Juan Felipe Imbett</li>
<li>Juli&aacute;n Espinel</li>
</ul>
<br><strong>Tecnologias:</strong> PHP, JavaScript, JQuery, Java, HTML, CSS.<br>';

if (isset($pageTitle))
{
	if ($pageTitle == "Proyectos - " )
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