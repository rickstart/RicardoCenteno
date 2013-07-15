<?php
	$_GET['op']=20;
	include dirname(__FILE__)."/../controllers/gee_search/consultas.php";
?>
<script src="/js/general.js" type="text/javascript"></script>
<br class="clearfix">
<div id="bannerslatbg">
	<a href="<?php echo $site['linkmembresias']?>">
	<img src="/images/banners/banner_b.gif" width="290" height="156" class="banner_a1" alt="Ver más"/>
	<img src="/images/banners/banner_b.png" width="235" height="150" class="banner_a" alt="Ver más"/></a>
	<a href="/index.php/integrate" ><img src="/images/banners/banner_c.png" width="183" height="93" class="banner_b" alt="Ver más"/>
	<img src="/images/btn_ver_mas.png" width="76" height="19" alt="Ver m&aacute;s" class="btnbanner" /></a>
</div> <!--bannerslatbg-->

<form method=post id="frmgogo" action="/index.php/resultados">
<div id="plecaazulhome">
        <div id="videohome">
			  <iframe width="260" height="230" src="http://www.youtube.com/embed/VtVAjX37WK8?rel=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
		</div><!--videohome-->
		<div id="fondobuscador">

			<table>
			<tr><td>Tipo de<br/>operación:</td><td><select id="operacion" name='ope' class="buscador_combo"></select></select></td></tr>
			<tr><td>Tipo de<br/> inmueble: </td><td><select id="tipoinmueble" name='ti' class="buscador_combo"></select></select></td></tr>
			<tr><td>Estado: </td><td><select id="estado" name='edo' class="buscador_combo"></select></td></tr>
			<tr><td>Municipio: </td><td><select id="municipio" name='mun' class="buscador_combo"></select></td></tr>
			<tr><td colspan=2><input type="submit" value="Buscar" id=buscar class="boton_enviar"></td></tr>
			</table>
			<input type=hidden name=op value=10>
			<input type=hidden name=start value=0>
			<input type=hidden name=regs value=20>

		</div><!--fondobuscador-->
</div><!--plecaazulhome-->
</form>

<div id="algunaspropiedades">
      <h3>Algunas propiedades</h3>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
<?php
	foreach($result['docs'] as $r){
		if (strpos(' '.$r['imagen_principal'],'imagenes/')=== FALSE){
			$r['imagen_principal']="fotos/original/".$r['imagen_principal'];
		}

?>

          <td width="200">
            <a href="/detalle?op=11&idinmueble=<?php echo $r['idinmueble']?>&ope=<?php echo $r['idoperacion']?>">
            <div class="masked-image">
			<img src="http://www.metroscubicos.com/<?php echo $r['imagen_principal']?>" alt="" width="200" height="160" />
            <div class="cookie-cutter">
            </div>
            </div>
            </a>
          </td>
<?php }?>
        </tr>
        <tr>
<?php foreach($result['docs'] as $r){?>
          <td class="descripcionProp"><b><?php echo $r['facet_tipoinmueble']?></b></td>
<?php }?>
        </tr>
        <tr>
<?php foreach($result['docs'] as $r){?>
          <td class="descripcionProp"><?php echo $r['calle']?></td>
<?php }?>
        </tr>
        <tr>
<?php foreach($result['docs'] as $r){?>
          <td class="descripcionProp"><?php echo $r['colonia']?></td>
<?php }?>
        </tr>
        <tr>
<?php foreach($result['docs'] as $r){?>
          <td class="descripcionProp">$ <?php echo number_format($r['precio'],2)?><?php if ($r['moneda']=='D') echo " USD";?></td>
<?php }?>
        </tr>
      </table>
<br class="clearfix">
      <img src="/images/alianzas.jpg" alt="Alianzas" width="580" height="74" class="alianzasLogos" />

</div><!--algunaspropiedades-->
