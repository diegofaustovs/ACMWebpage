<?php

function ellipse($str,$n_chars,$projNumber)
{
	$crop_str=' <a href="project.php?id='.$projNumber.'"> [Read More ...] </a>';
	$buff=strip_tags($str);
	if(strlen($buff) > $n_chars)
	{
		$cut_index=strpos($buff,' ',$n_chars);
		$buff=substr($buff,0,($cut_index===false? $n_chars: $cut_index+1)).$crop_str;
	}
	return $buff;
}

$picture = '<img src="./img/bootcamps.png" class="imag img-thumbnail"><br><br>';

$descr = "El proyecto bootcamps nace a trav&eacute;s de el inter&eacute;s propio de los estudiantes por aprender instrumentos de tecnolog&iacute;as que no alcanzan a ofrecerse en el espacio acad&eacute;mico, pero que son de gran utilidad para la el desarrollo del mundo actual.

Los bootcamps son espacios que se desarrollar&aacute;n cada 2 semanas, donde los estudiantes de cualquier carrera que est&eacute;n motivados e interesados por aprender podr&aacute;n compartir una experiencia con otros estudiantes interesados. Contamos con el apoyo de profesores que nos apoyan con su conocimiento y con su inter&eacute;s.
Cabe aclarar que los bootcamps NO SON CLASES. Nosotros aprendemos y disfrutamos de lo que hacemos en comunidad. Los bootcamps permiten no solamente aprender, sino
praticar, desarrollar y conocer personas interesadas en lo que nos gusta hacer. As&iacute; mismo los bootcamps permiten el desarrollo de ideas de innovaci&oacute;n y de formaci&oacute;n de equipos, con los cuales se pueden desarrollar proyectos tanto para la universidad como individuales y as&iacute; lograr emprender.
Los temas que se aprenden son escogidos por la comunidad, y los workshops no son solo divertidos, sino competitivos. As&iacute; que si te interesa dar lo mejor de t&iacute;, deber&iacute;as probarlos!

Para esto, se desarrollar&aacute; una aplicaci&oacute;n web de ACM Developers, en el cual todas las personas de la comunidad reunen conocimiento de los temas que se aprenden, y mediante tutoriales, informaci&oacute;n, ejemplos, ayudas, demos e informaci&oacute;n que encontremos, se armar&aacute; un repositorio en el que cualquier persona pueda acceder y practicar en cualquier momento. ACM Developers ofrece un repositorio central de informaci&oacute;n educativa de nuevas tecnolog&iacute;as web y m&oacute;viles para que cualquier interesado pueda aprender y desarrollar individualmente.";

if (isset($pageTitle))
{
	if ($pageTitle == "Proyectos - " )
	{
		echo $picture.ellipse($descr, 500, '1');
	}

	else
	{
		//$projectPic = '<img src="../img/bootcamps.png" class="imag img-thumbnail"><br><br>';
		echo '<p>'.$picture.'<div class="jumbotron cust">'.$descr.'</div></p>';
	}
}


?>