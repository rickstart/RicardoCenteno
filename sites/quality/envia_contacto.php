<?php
	ini_set('display_errors',0);
	
	//var_dump($_GET);
	
	include '/var/www/html/metros/system/class.archivos.inc.php';
	include '/var/www/html/metros/system/class.email.inc.php';

	$datos_s='
		<table>
		<tr><td class="mensaje">Nombre:</td><td class="mensaje">'.$nombre.'</td></tr>
		<tr><td class="mensaje">Tel&eacute;fono:</td><td class="mensaje">'.$tel.'</td></tr>
		<tr><td class="mensaje">Correo electr&oacute;nico:</td><td class="mensaje">'.$email.'</td></tr>
		<tr><td class="mensaje">Empresa:</td><td class="mensaje">'.$nempresa.'</td></tr>
		<tr><td class="mensaje">Comentarios:</td><td class="mensaje">'.$comentarios.'</td></tr>
		</table>
	';
	//$detalle='';
	$m3_email=new m3Email();
	$m3_email->email_subject='Datos de Contacto | Quality Inmobiliaria - Test';
	$m3_email->email_from='jalfonso@zootropostudio.com';
	//$m3_email->email_to=$strmail;
	$m3_email->email_to='jalfonso@zootropostudio.com';
	//$m3_email->email_bcc= 'jodiazc@gmail.com, jorgedcobarrubias@hotmail.com, yerenia@hotmail.com';
	$m3_email->email_reply='jalfonso@zootropostudio.com';
	$m3_email->email_return="jalfonso@zootropostudio.com";
	$m3_email->email_template='email_quality';
	$m3_email->ruta_templates='/var/www/html/paginas/Qualitytest/email/';
	$m3_email->ext_template='.html';	
	$m3_email->mensaje_email['saludo']='Estimado Socio';
	$m3_email->titulo='Datos de Contacto';
	$m3_email->mensaje_email['intro']='Gracias por tu confianza en quality.com.mx';
	$m3_email->mensaje_email['cuerpo']=$datos_s;
	$m3_email->mensaje_email['detalle']=$detalle;
	$m3_email->mensaje_email['cierre']='Gracias por tu confianza';
	$m3_email->email_test=0;
	$m3_email->email();
	$m3_email->email_send();
	$mensaje_r='
	<table border=1 width="100%" height="200">
	<tr>
	<td>
		Su mensaje ha sido enviado satisfactoriamente
	</td>
	</tr>
	</table>	
	';
	echo $mensaje_r;
?>
