<?php

$picture = '<img src="./actividades/1/0.png" class="imag img-thumbnail"><br><br>';

$descr = 'Avanzando desde nuestro primer y exitoso <a title="Startup Criollo" href="http://acm.uniandes.edu.co/startupcriollo" target="_blank">Startup Criollo</a>, ¡Llega el primer Startup Weekend Universitario a Colombia gracias a ACM Uniandes.<br><br>
Del 26 al 28 de abril, se realizar&aacute; el primer SW en la Universidad de los Andes enfocado hacia estudiantes: un intenso contrarreloj de 54 horas lleno de innovaci&oacute;n y creatividad en el que amantes de la tecnolog&iacute;a, geeks, diseñadores y gente de negocios se re&uacute;nen en equipos alrededor de ideas innovadoras de tecnolog&iacute;a y las convierten en empresas en internet!';

if (isset($pageTitle))
{
	if ($pageTitle == "Actividades - " )
	{
		echo $picture.ellipse($descr, 500, '1');
	}

	else
	{
		$button = '<div class="col-md-10 col-sm-6 col-xs-8""></div><div>  <button type="button" class="btn btn-default cust" onclick="goBack()"><img src="https://www.cloudcovermusic.com/img/left_arrow2.png" style="height:1.5em;"> Go Back</img></button></div>';
		echo '<p>'.$picture.'<div class="jumbotron cust">'.$descr.'<br>';
		echo '<br><br>'.$button.'</div></p>';
	}
}