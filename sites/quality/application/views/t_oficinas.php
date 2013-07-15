<h1>Oficinas Quality</h1>

  <div id="contenidotexto">
<p>Quality tiene presencia en toda la República Mexicana con más de 30 oficinas, estamos en:<br />
  <b><a href="#df">Distrito Federal</a>, <a href="#edo">Estado de México</a>, <a href="#gua">Guanajuato, <a href="#jal">Jalisco</a>, <a href="#pue">Puebla</a>, <a href="#quer">Querétaro</a>, <a href="#tlax">Tlaxcala</a>, <a href="#ver">Veracruz</a>.</b></p>

<?php foreach($locations as $l){?>
	<div class="oficinasdiv"><a name='<?php echo $l['ancla']?>'></a><img src='<?php echo $l['map']?>'width="461" height="342" border="0" usemap="#Map" class="alignLeft" />
	<map name="Map" id="Map">
	    <area shape="rect" coords="218,191,291,203" href="#gua" />
	    <area shape="rect" coords="231,223,281,235" href="#pue" />
	    <area shape="rect" coords="279,205,317,226" href="#df" />
	    <area shape="rect" coords="177,215,269,227" href="#edo" />
	    <area shape="rect" coords="252,233,323,246" href="#tlax" />
	    <area shape="rect" coords="311,247,372,261" href="#ver" />
	    <area shape="rect" coords="198,168,276,190" href="#quer" />
	    <area shape="rect" coords="146,203,219,215" href="#jal" />
  	</map>
     <div class="listadooficinas">
        <div class="top_listadooficinas"></div>
			<h2><?php echo $l['edo']?></h2>
         		<ul class="uloficinas">
					<?php foreach($l['id'] as $i){?>
						<li><b><?php echo $maestro[$i]['franquicia'];?></b><span><?php echo $maestro[$i]['zona'];?></span><br /><?php echo $maestro[$i]['tel1'];?><br /><?php echo $maestro[$i]['tel2'];?></li>
					<?php }?>
				</ul>

         <div class="bottom_listadooficinas"></div>
     </div><!--listadooficinas-->
</div><!--oficinasdiv-->
<div class="clearfix"></div>


<?php }?>

</div><!-- contenidotexto -->
