	   <link rel="stylesheet" type="text/css" href="../css/data_table.css">
       
       <script language="JavaScript" type="text/javascript" src="../js/jquery-1.8.3.js"></script>
       <script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
       
       <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				
				$('#datTable').dataTable({
					"sDom": 'ipt<"bottom">ip',
					"bPaginate": true,
					"bLengthChange": false,
					"bFilter": false,
					"bSort": true,
					"bInfo": true,
					"bAutoWidth": false,
					"oLanguage": 
					{
		            	"sLengthMenu": "Display _MENU_ records per page",
		           		"sZeroRecords": "Nothing found - sorry",
		            	"sInfo": "Mostrando del _START_ al _END_ de _TOTAL_ propiedades",
		            	"sInfoEmpty": "Showing 0 to 0 of 0 records",
		            	"sInfoFiltered": "(filtered from _MAX_ total records)",
		            	"oPaginate": {
		            		"sNext": "",
		            		"sPrevious": ""
		            	}

        			},
				 "aoColumns": [
			      null,
			      null,
			      null,
			      null,
			      null,
			      null,
			       { "bSortable": false}
			    ] } );
				} );
		</script>


<?php
	$_GET['op']=10;
	include dirname(__FILE__)."/../controllers/gee_search/consultas.php";

	$cuantos =	$result['numFound'];
	$paginas= ceil( $cuantos / $_POST['regs']);
	if (!isset($_POST['regs']) or empty($_POST['regs']) or !is_int($_POST['regs'])) {
		$_POST['regs'] = 1;
	}

	$mostrar=$_POST['start'];
	$page_ini= $_POST['start'] / $_POST['regs'];
?>


<h1>Resultados </h1>
<div id="contenidotable">


		<table id="datTable" width="875px" cellspacing="0" cellpadding="2" border="0">
			<thead>
				<tr style="height:55px;color:#fff;">
					<th style="text-align:left;  padding-left:15px;">Ubicaci&oacute;n</th>
					<th width="200px">Precio</th>
					<th width="80px">M2terr</th>
					<th width="80px">M2cons</th>
					<th width="70px">Cuarto</th>
					<th width="70px">Baños</th>
					<th width="90px" class="imghidden">Foto</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($result['docs'] as $d):?>
				<?php //var_dump($d);?>
				<tr>
				<td width="200px" class="leftxt"><a href="/index.php/detalle?op=11&idinmueble=<?php echo $d['idinmueble']?>&ope=<?php echo $d['idoperacion']?>"><?php echo $d['calle']?></a></td>
				<?
					$d['precio']=$nombre_format_francais = number_format($d['precio'], 2, '.', ',')
				?>
				<td>$ <?php
					echo $d['precio'];
					if ($d['moneda']!='P') echo " <b>USD</b>";

				?></td>
				<td><?php echo $d['m2terr']?></td>
				<td><?php echo $d['m2cons']?></td>
				<td><?php echo $d['cuartos']?></td>
				<td><?php echo $d['banos']?></td>
				<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/<?php echo $d['imagenes'][0]?>"height="60" width="60"></td>
				
				</tr>


				<?php
					$mostrar++;
				?>
				<?php endforeach;?>

				 <tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001050192&ope=1">MOLLENDO</a></td>
								<td>$ 5,820,000.00</td>
				<td>203</td>
				<td>299</td>
				<td>9</td>
				<td>6</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001046209&ope=1">Jaime Torres Bodet</a></td>
								<td>$ 1,900,000.00</td>
				<td>200</td>
				<td>200</td>
				<td>4</td>
				<td>2</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2000987962&ope=1">Norte 70</a></td>
								<td>$ 3,100,000.00</td>
				<td>314</td>
				<td>233</td>
				<td>4</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001042172&ope=1">Teponaxtli</a></td>
								<td>$ 1,990,000.00</td>
				<td>160</td>
				<td>204</td>
				<td>3</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg" height="60" width="60">
				</td>
				</tr>

				<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001050192&ope=1">MOLLENDO</a></td>
								<td>$ 5,820,000.00</td>
				<td>203</td>
				<td>299</td>
				<td>9</td>
				<td>6</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001046209&ope=1">Jaime Torres Bodet</a></td>
								<td>$ 1,900,000.00</td>
				<td>200</td>
				<td>200</td>
				<td>4</td>
				<td>2</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg"height="60" width="60"></td>-->
				<td height="60px" class="leftxt" >
					<img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2000987962&ope=1">Norte 70</a></td>
								<td>$ 3,100,000.00</td>
				<td>314</td>
				<td>233</td>
				<td>4</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001042172&ope=1">Teponaxtli</a></td>
								<td>$ 1,990,000.00</td>
				<td>160</td>
				<td>204</td>
				<td>3</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg" height="60" width="60">
				</td>
				</tr>

<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001050192&ope=1">MOLLENDO</a></td>
								<td>$ 5,820,000.00</td>
				<td>203</td>
				<td>299</td>
				<td>9</td>
				<td>6</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001046209&ope=1">Jaime Torres Bodet</a></td>
								<td>$ 1,900,000.00</td>
				<td>200</td>
				<td>200</td>
				<td>4</td>
				<td>2</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2000987962&ope=1">Norte 70</a></td>
								<td>$ 3,100,000.00</td>
				<td>314</td>
				<td>233</td>
				<td>4</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001042172&ope=1">Teponaxtli</a></td>
								<td>$ 1,990,000.00</td>
				<td>160</td>
				<td>204</td>
				<td>3</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg" height="60" width="60">
				</td>
				</tr>
<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001050192&ope=1">MOLLENDO</a></td>
								<td>$ 5,820,000.00</td>
				<td>203</td>
				<td>299</td>
				<td>9</td>
				<td>6</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131764/2001050192_34.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001046209&ope=1">Jaime Torres Bodet</a></td>
								<td>$ 1,900,000.00</td>
				<td>200</td>
				<td>200</td>
				<td>4</td>
				<td>2</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/131055/2001046209.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2000987962&ope=1">Norte 70</a></td>
								<td>$ 3,100,000.00</td>
				<td>314</td>
				<td>233</td>
				<td>4</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2000987962.jpg" height="60" width="60">
				</td>
				</tr>


																<tr>
				<td width="200px" class="leftxt" ><a href="/index.php/detalle?op=11&idinmueble=2001042172&ope=1">Teponaxtli</a></td>
								<td>$ 1,990,000.00</td>
				<td>160</td>
				<td>204</td>
				<td>3</td>
				<td>1</td>
				<!--<td height="60px" style="border-right:0px"><img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg"height="60" width="60"></td>-->
				<td height="60px" style="border-right:0px">
					<img src="http://www.metroscubicos.com/fotos/original/2012/108222/2001042172.jpg" height="60" width="60">
				</td>
				</tr>
			</tbody>
		</table>
	

</div><!--contenidotexto-->
