<?php
	$_GET['op']=11;
	include dirname(__FILE__)."/../controllers/gee_search/consultas.php";
	//var_dump($result);
	$idempresa_show=$result['docs'][0]['idempresa'];
	$maestro_original=$maestro[$idempresa_show];
?>
<div id="contenidotexto">

<table width="870px">
	<tr>
	<td><img src="/images/buscador/flecha.jpg" width="18" height="15" /><a  href="javascript:history.back();">Regresar</a></td>
	</tr>
</table>


<div>
	<?php foreach($result['docs'] as $inm):?>

<?php
	$especificos=array(
		'amueblado'	=>	$inm['amueblado'],
		'edad'	=>	$inm['edad'],
		//'conservacion'	=>	$inm['conservacion'],
		'm2cons'	=>	$inm['m2cons'],
		'm2terr'	=>	$inm['m2terr'],
		'mfondo'	=>	$inm['mfondo'],
		'mfrente'	=>	$inm['mfrente'],
		'msuperficie'	=>	$inm['msuperficie'],
		'niveles'	=>	$inm['niveles'],
		'banos'	=>	$inm['banos'],
		'autos'	=>	$inm['autos'],
		'cuartos'	=>	$inm['cuartos'],
		'nivel'	=>	$inm['nivel'],
		'no_deptos'	=>	$inm['no_deptos'],
		'no_casas'	=>	$inm['no_casas'],
		//'forma'	=>	$inm['forma'],
		'elevadores'	=>	$inm['elevadores'],
		//'uso_suelo'	=>	$inm['uso_suelo'],
		'andenes'	=>	$inm['andenes'],
	);
	$otros=array(
		'amueblado'	=>	$inm['amueblado'],
		'edad'	=>	$inm['edad'],
		//'conservacion'	=>	$inm['conservacion'],
		'm2cons'	=>	$inm['m2cons'],
		'm2terr'	=>	$inm['m2terr'],
		'mfondo'	=>	$inm['mfondo'],
		'mfrente'	=>	$inm['mfrente'],
		'msuperficie'	=>	$inm['msuperficie'],
		'niveles'	=>	$inm['niveles'],
		'banos'	=>	$inm['banos'],
		'autos'	=>	$inm['autos'],
		'cuartos'	=>	$inm['cuartos'],
		'nivel'	=>	$inm['nivel'],
		'no_deptos'	=>	$inm['no_deptos'],
		'no_casas'	=>	$inm['no_casas'],
		//'forma'	=>	$inm['forma'],
		'elevadores'	=>	$inm['elevadores'],
		//'uso_suelo'	=>	$inm['uso_suelo'],
		'andenes'	=>	$inm['andenes'],
	);


$path = '/var/www/html/metros/m3_2010/img/galeria/slide/';
$img = 'http://www.metroscubicos.com/';
//$gestor = scandir($path);

?>

<link rel="stylesheet" href="/js/tinyslideshow/style.css" />
<div class="izq" style="margin-right:15px;">
<!-- Galeria ------------------------------------------------------- -->
<div class="buscador_detalle_ch">
			<h2>Galería</h2>
	<p>
<ul id="slideshow">
<?php
	if (!empty($inm['imagenes'])){
	foreach($inm['imagenes'] as $i){
?>
		<li>
			<h3></h3>
			<span>http://www.metroscubicos.com/<?php echo $i?></span>
			<p></p>
		</li>
<?php }}else{
		echo '
		<li>
		     <h3></h3>
			 <span>/images/foto.jpg</span>
			 <p></p>
		</li>
		';
	}?>

	</ul>
	<div id="wrapper">
		<div id="fullsize">
			<div id="imgprev" class="imgnav" title="Previous Image"></div>
			<div id="imgnext" class="imgnav" title="Next Image"></div>
			<div id="image"></div>
		</div>
	</div>
	</p>
</div><!--buscador_detalle_ch-->
<div class="buscador_detalle_ch_footer"></div>
<script type="text/javascript" src="/js/tinyslideshow/compressed.js"></script>
<script type="text/javascript">
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.spacing=5;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>
</div>
<div class="izq">
<!-- Detalles y tipo de inmueble ------------------------------------------------------- -->
<div class="buscador_detalle_ch">
	<h2><?php echo $inm['tipoinmueble'];?></h2>
	<p>
			<table width="350" height="200">
				<tr><td width="150" class="linea">Colonia:</td><td class="linea"><?php echo $inm['colonia'];?></td></tr>
				<tr><td width="150" class="linea">Calle:</td><td class="linea"><?php echo $inm['calle'];?></td></tr>
				<tr><td width="150" class="linea">No. Exterior:</td><td class="linea"><?php echo $inm['num_ext'];?></td></tr>
				<tr><td width="150" class="linea">No. Interior:</td><td class="linea"><?php echo $inm['num_int'];?></td></tr>
				<tr><td width="150" class="linea">Estado:</td><td class="linea"><?php echo $inm['estado'];?></td></tr>
				<tr><td width="150" class="linea">Del/Municipio:</td><td class="linea"><?php echo $inm['municipio'];?></td></tr>
				<?php $inm['precio']=$nombre_format_francais = number_format($inm['precio'], 2, '.', ',')?>
				<tr><td width="150" class="linea">Precio:</td><td class="linea"><?php echo $inm['precio'];?></td></tr>
				<tr><td width="150" class="linea">Alfaclave:</td><td class="linea"><?php echo $inm['alfaclave'];?></td></tr>
			</table>
	</p>
</div><!--buscador_detalle_ch-->
<div class="buscador_detalle_ch_footer"></div>

</div>

<br class="clearfix">
<!-- Especificos --------------------------------------------------------------------------- -->
<div class="buscador_detalle">
	<h2>Especificos</h2>
		<?php
			//echo '<pre>';print_r($especificos);echo '</pre>';

			echo '<table width="780px" cellspacing="0" cellpadding="0">';
			foreach($especificos as $key => $esp)
			{
				if(!empty($esp))
					echo '<tr><td width="150px" class="linea">'.$key .'</td><td class="linea">' .$esp .'</td></tr>';
			}
			echo '</table>';
		?>
<div class="buscador_detalle_footer"></div>
</div><!--buscador_detalle-->
<br class="clearfix">

<!-- Comentarios --------------------------------------------------------------------------- -->
<div class="buscador_detalle">
	<h2>Comentarios</h2>
	<p><?php echo $inm['comentarios'];?></p>
<div class="buscador_detalle_footer"></div>
</div><!--buscador_detalle-->
<br class="clearfix">

		<div id="datose">
</div>


<div class="izq" style="margin-right:15px;">
				<!-- UbicaciÃ³n --------------------------------------------------------------------------- -->
				<div class="buscador_detalle_ch">
					<h2>Contacto</h2>

					 <table width="430" height="200">
						<tr>
						  <td width="154" rowspan="5">
							  <?php
							  if ($site['socio']==1){
								  //var_dump($maestro_original);
								 ?>

                          <img src="<?php echo $maestro_original['logo']?>" width="144" height="170" />
						  </td>
						  <td>
							  <strong><?php echo $maestro_original['franquicia']?></strong><br>
							  <?php echo $maestro_original['email']?><br>
							  <?php echo $maestro_original['direccion1']?><br>
							  <?php echo $maestro_original['direccion2']?><br>
							  <?php echo $maestro_original['estado']?>, <?php echo $maestro_original['cp']?><br>
							  Tel: <?php echo $maestro_original['tel1']?><br>
							  <?php
								}else{
							  ?>
                          <img src="<?php echo $site['logo']?>" width="144" height="170" />
						  </td>
						  <td>
							 <strong> <?php echo $site['franquicia']?></strong><br>
							  <?php echo $site['email']?><br>
							  <?php echo $site['direccion1']?><br>
							  <?php echo $site['direccion2']?><br>
							  <?php echo $site['estado']?>, <?php echo $site['cp']?><br>
							  Tel: <?php echo $site['tel1']?><br>
							  <?php }?>
						  </td>
						</tr>
				    </table>
				</div><!--buscador_detalle_ch-->
				<div class="buscador_detalle_ch_footer"></div>
</div><!-- izq -->

<div class="izq">
				<!-- Email --------------------------------------------------------------------------- -->
								<div class="buscador_detalle_ch">
								<h2>Email</h2>

								<?php echo form_open('detalle#forma'); ?><!--Forma-->
									<table id="frmsolicitante" cellspacing="0" cellpadding="0" width="350">
										<tr><td  width="90">Nombre del <br/>Solicitante:</td><td width="300"><input type="text" name="names" id="names" class="contacto_campo4" value="<?php echo set_value('names'); ?>" maxlength="30"><div class="contacto_campo_final"></div></td>
										<tr><td  width="90">Telefono:</td><td><input type="text" name="tels" id="tels" class="contacto_campo4" value="<?php echo set_value('tels'); ?>" maxlength="30"><div class="contacto_campo_final"></div></td>
										<tr><td  width="90">Email:</td><td><input type="text" name="mail" id="mail" class="contacto_campo4" value="<?php echo set_value('mail'); ?>" maxlength="30"><div class="contacto_campo_final"></div></td>
										<tr>
											<td  width="90">Comentarios:</td>
											<td><div class="fondo_detalle"><textarea name="comentario_s" id="comentario_s" class="detalletext"></textarea></div></td>
										</tr>
										<tr><td colspan="2" align="right">
										<input name="franquicianombre" id="franquicianombre" value="<?php echo $site['franquicia']?>" type="hidden"/>
										<input name="emailcontacto" id="emailcontacto" value="<?php echo $site['emailcontacto']?>" type="hidden"/>
										<!-- Detalles propiedad ---------------------- -->

							<input name="itipo" id="itipo" value="<?php echo $inm['tipoinmueble'];?>" type="hidden"/>
							<input name="icol" id="icol" value="<?php echo $inm['colonia'];?>" type="hidden"/>
							<input name="icalle" id="icalle" value="<?php echo $inm['calle'];?>" type="hidden"/>
							<input name="inumex" id="inumex" value="<?php echo $inm['num_ext'];?>" type="hidden"/>
							<input name="inumint" id="inumint" value="<?php echo $inm['num_int'];?>" type="hidden"/>
							<input name="iedo" id="iedo" value="<?php echo $inm['estado'];?>" type="hidden"/>
							<input name="imun" id="imun" value="<?php echo $inm['municipio'];?>" type="hidden"/>
							<input name="ialfa" id="ialfa" value="<?php echo $inm['alfaclave'];?>" type="hidden"/>
							<input name="iprecio" id="iprecio" value="<?php echo $inm['precio'];?>" type="hidden"/>
							<input name="iurl" id="iurl" value="<?php echo current_url();?>" type="hidden"/>

										<!-- ----------------------------------------- -->
										<input type="submit" value="Enviar" /></td>
									</table>
								 <div class="errorforma"> <?php echo validation_errors(); ?> </div>
								 </form><!--Forma-->

								</div><!--buscador_detalle_ch-->
								<div class="buscador_detalle_ch_footer"></div>
				</div><!-- izq -->
<br class="clearfix">

	<?php endforeach;?>
</div>
</div><!--contenidotexto-->
