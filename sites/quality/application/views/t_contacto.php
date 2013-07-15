<h1>Contáctanos</h1>
<div id="contenidotexto">
<div class="alignleft">
	<div id="globocontacto">
		  <div class="texto">
				<?php echo $site['franquicia']?><br />
				<?php echo $site['email']?><br />
				<?php echo $site['direccion1']?><br />
				<?php echo $site['direccion2']?><br />
				<?php echo $site['cp']?> <?php echo $site['estado']?><br />
				<?php echo $site['tel1']?><br />
		   </div><!--texto-->
	</div><!-- globocontacto-->

</div>
<div class="alignleft">
	<div id="globograndecontacto">



	<?php echo form_open('contacto#forma'); ?><!--Forma-->
		<table id="frmsolicitante" cellspacing="0" cellpadding="0" border="0" width="430" height="200" class="tablacontacto">
			  <tr>
				<th width="70" scope="col">Nombre</th>
				<td width="400"><input type="text" class="contacto_campo" name="names" id="names" maxlength="40" value="<?php echo set_value('names'); ?>"><div class="contacto_campo_final"></div></td>
		</th>
			  </tr>
			  <tr>
				<th scope="row">E-Mail:</th>
				<td><input type="text" name="mail" id="mail" class="contacto_campo" maxlength="43" value="<?php echo set_value('mail'); ?>"><div class="contacto_campo_final"></div></td>
			  </tr>

			  <tr>
				<th scope="row">Lada:</th>
				<td><input type="text" name="lada" id="lada" class="contacto_campo2" maxlength="4" value="<?php echo set_value('lada'); ?>" ><div class="contacto_campo_final"></div> <div class="texto_formas">Teléfono:</div><input type="text" name="tels" id="tels"size="18" class="contacto_campo4b" value="<?php echo set_value('tels'); ?>" maxlength="25" /><div class="contacto_campo_final"></div></td>
			  </tr>
			  <tr>
				<th scope="row">Estado:</th>
				<td><input type="text" name="edo" id="edo" class="contacto_campo3" maxlength="25" value="<?php echo set_value('edo'); ?>" ><div class="contacto_campo_final"></div><div class="texto_formas"> Ciudad:</div><input type="text" name="cd" id="cd"size="20" class="contacto_campo3" maxlength="25" value="<?php echo set_value('cd'); ?>"/><div class="contacto_campo_final"></div></td>
			  </tr>
			  <tr>
				<th scope="row">Comentarios:</th>
				<td><div class="fondo_comentarios"><textarea name="comentario_s" id="comentario_s" rows="4" cols="40"class="contactext" value="<?php echo set_value('comentario_s'); ?>"></textarea></div></td>
			  </tr>
			  <tr>
					<th scope="row"></th>
					<td>
					<!-- <input type="button" id="conatactar" value="Submit" class="boton_enviar">-->
					<input name="franquicianombre" id="franquicianombre" value="<?php echo $site['franquicia']?>" type="hidden"/>
					<input name="emailcontacto" id="emailcontacto" value="<?php echo $site['emailcontacto']?>" type="hidden"/>
					<input type="submit" value="Enviar" />
					</td>
			  </tr>
		</table>
		<div class="errorforma"> <?php echo validation_errors(); ?> </div>
		</form><!--Forma-->

<a name="forma"></a>
	</div><!--globograndecontacto-->
</div>
<div class="clearfix"></div>
</div><!--contenidotexto-->