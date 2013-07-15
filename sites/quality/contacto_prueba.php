<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site['franquicia']?> | Viendo por tí</title>
<link href="css/qualitystyle.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon.config.js" type="text/javascript"></script>
<script src="js/myrad_italic_700.font.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/general.js"></script>
</head>

<body>
<!-- Google Analytics ---------------------------------------------------------------------- -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-<?php echo $site['google']?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


<div id="avisoheader">
  <!--<ul id="idiomalist">
	<li>Lenguaje <a href="#">English</a> | <a href="index.php">Español</a></li>
  </ul>-->
  <a href="/index.php/avisodeprivacidad">Aviso de privacidad </a>
</div>

<div id="contenedor">
    <div id="menu">
      <ul id="menulista">
        <li><a href="/">Búsqueda</a></li>
        <li><a href="/index.php/quienessomos">Quiénes somos</a></li>
        <li><a href="/index.php/servicios">Servicios</a></li>
        <li><a href="http://www.qualityfranquicias.com.mx/membresias/">Membresías</a></li>
        <li><a href="/index.php/integrate">Intégrate</a></li>
        <li><a href="/index.php/oficinas">Oficinas Quality</a></li>
        <li><a href="/index.php/contacto">Contáctanos</a></li>
      </ul>
    </div>

<a href="/"><img src="images/logos/logo.png" width="183" height="216" align="bottom" class="logo"></a>
<div class="banneranimado">
	<img src="images/banners/bannerhome.gif" width="683" height="180">
</div><!--banneranimado-->

<h1>Contáctanos</h1>
<div id="contenidotexto">
<div class="alignleft">
	<div id="globocontacto">
		  <div class="texto">
				<?php echo $site['franquicia']?><br />
				<?php echo $site['email']?><br />
				<?php echo $site['direccion1']?><br />
				<?php echo $site['direccion2']?><br />
				<?php echo $site['cp']?><?php echo $site['estado']?><br />
				Tel: <?php echo $site['tel1']?><br />
		   </div><!--texto-->
	</div><!-- globocontacto-->

</div>
<div class="alignleft">
	<div id="globograndecontacto">
		<table id="frmsolicitante" cellspacing="0" cellpadding="0" border="0" width="430" height="200" class="tablacontacto">
			  <tr>
				<th width="70" scope="col">Nombre</th>
				<td width="400"><input type="text" class="contacto_campo" name="names" id="names" maxlength="40"><div class="contacto_campo_final"></div></td>
		</th>
			  </tr>
			  <tr>
				<th scope="row">E-Mail:</th>
				<td><input type="text" name="emails" id="emails" class="contacto_campo" maxlength="40"><div class="contacto_campo_final"></div></td>

			  </tr>

			  <tr>
				<th scope="row">Lada:</th>
				<td><input type="text" name="lada" id="lada" class="contacto_campo2" maxlength="3"><div class="contacto_campo_final"></div> <div class="texto_formas">TelÃ©fono:</div><input type="text" name="tels" id="tels"size="18" class="contacto_campo4" maxlength="25" /><div class="contacto_campo_final"></div></td>
			  </tr>
			  <tr>
				<th scope="row">Estado:</th>
				<td><input type="text" name="lada" id="lada" class="contacto_campo3" maxlength="15"><div class="contacto_campo_final"></div><div class="texto_formas"> Ciudad:</div><input type="text" name="tels" id="tels"size="15" class="contacto_campo3" maxlength="15"/><div class="contacto_campo_final"></div></td>
			  </tr>
			  <tr>
				<th scope="row">Comentarios:</th>
				<td><div class="fondo_comentarios"><textarea name="comentario_s" id="comentario_s" rows="4" cols="40"class="contactext"></textarea></div></td>
			  </tr>
			  <tr>
					<th scope="row"></th>
					<td><input type="button" id="conatactar" value="enviar" class="boton_enviar"></td>
			  </tr>
		</table>
	</div><!--globograndecontacto-->
</div>
<div class="clearfix"></div>
</div><!--contenidotexto-->


    <!-- -------------------------------------FOOTER-->
    <div id="footer">
      <ul id="creditoslist">
        <li><a href="#"><img src="images/metroscubicos.png" width="149" height="17" alt="powered by metroscubicos.com" /></a></li>
        <li><a href="#">Diseño ZootropoStudio</a> |</li>
      </ul>
      <ul id="footerlist">
        <li><a href="/">Búsqueda</a></li>
        <li><a href="/index.php/quienessomos">Quiénes somos</a></li>
        <li><a href="/index.php/servicios">Servicios</a></li>
        <li><a href="http://www.qualityfranquicias.com.mx/membresias/">Membresías</a></li>
        <li><a href="/index.php/integrate">Intégrate</a></li>
        <li><a href="/index.php/oficinas">Oficinas Quality</a></li>
        <li><a href="/index.php/contacto">Contáctanos</a></li>
        <li><a href="/index.php/avisodeprivacidad">Aviso de privacidad</a></li>
      </ul>
    </div><!--footer-->
</div><!--contenedor-->




</body>
</html>