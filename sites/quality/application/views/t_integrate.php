<script src="/js/general.js" type="text/javascript"></script>

<h1>Intégrate</h1>

<div id="contenidotexto">
<p>En <b>QUALITY® INMOBILIARIA</b> tenemos un programa de capacitación permanente, por lo que si desea integrarse a nuestra fuerza<br/> de ventas, llene el siguiente formulario y en breve nos pondremos en contacto con usted.</p>

<div id="integratecontacto">
<table id="frmsolicitante" cellspacing="0" cellpadding="0" border="0" width="430" height="200" class="tablaintegrate">
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
	    <td><input type="text" name="lada" id="lada" class="contacto_campo2" maxlength="4"><div class="contacto_campo_final"></div> <div class="texto_formas">Teléfono:</div><input type="text" name="tels" id="tels"size="18" class="contacto_campo4b" maxlength="25" /><div class="contacto_campo_final"></div></td>
	  </tr>
	  <tr>
	    <th scope="row">Estado:</th>
	    <td><input type="text" name="lada" id="lada" class="contacto_campo3" maxlength="25"><div class="contacto_campo_final"></div><div class="texto_formas"> Ciudad:</div><input type="text" name="tels" id="tels" class="contacto_campo3" maxlength="25"/><div class="contacto_campo_final"></div></td>
	  </tr>
	  <tr>
		<th scope="row">Comentarios:</th>
		<td><div class="fondo_comentarios"><textarea name="comentario_s" id="comentario_s" rows="4" cols="40"class="contactext"></textarea></div></td>
	  </tr>
	  <tr>
	  	    <th scope="row"></th>
	  	    <td>
	  	    <input name="franquicia" id="franquicia" value="<?php echo $site['franquicia']?>" type="hidden">
		    <input name="franquiciaemail" id="franquiciaemail" value="<?php echo $site['emailintegrate']?>" type="hidden">
	  	    <input type="button" id="conatactar" value="enviar" class="boton_enviar"></td>
	  </tr>
</table>
 </div><!--integratecontacto-->

 </div><!--contenidotexto-->
