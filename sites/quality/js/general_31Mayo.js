$(document).ready(function(){
	$.get("gee_search/consultas?op=1",function(data){
		$('#operacion').html(data);
	});
	$('#operacion').change(function(){
		$.get("gee_search/consultas?op=2",{ope:$('#operacion').val()},function(data){
			$('#tipoinmueble').html(data);
		});	
	});
	$('#tipoinmueble').change(function(){
		$.get("gee_search/consultas?op=3",{ope:$('#operacion').val(),ti:$('#tipoinmueble').val()},function(data){
			$('#estado').html(data);
		});	
	});
	$('#estado').change(function(){
		$.get("gee_search/consultas?op=4",{ope:$('#operacion').val(),ti:$('#tipoinmueble').val(),edo:$('#estado').val()},function(data){
			$('#municipio').html(data);
		});	
	});	
	$('#frmgogo').submit(function(){
		if ($('#operacion').val()>0){
			if ($('#tipoinmueble').val()>0){
				if ($('#estado').val()>0){
					if ($('#municipio').val()>0){
					
					}else{
						alert("Falta estado");
						return false;
					}
				}else{
					alert("Falta estado");
					return false;
				}
			}else{
				alert("Falta tipo de inmueble");
				return false;
			}
		}else{
			alert('Falta operación');
			return false;
		}
	});
	
	
	
	
	
	
	
	
	
	/*
	$.get("gee_search/consultas.php?op=1",function(data){
		$('#estado').html(data);
	});
	*/
	$('#conatactar').click(function(){
		if($('#names').val()!=''){
			if($('#emails').val()!=''){
				if($('#lada').val()!=''){
				  if($('#tels').val()!=''){
					$.get("envia_contacto.php",{"nombre":$('#names').val(),"telefono":$('#tels').val(),"email":$('#emails').val(),"email2":$('#emails2').val(),"comentarios":$('#comentario_s').val()},
					function(data){
						$('#sendcantac').html(data);
					});
				  }else{
						  alert('Debe de proporcionar su Teléfono');
				  }	
				}else{
						alert('Debe de proporcionar su Lada');
				}			
			}else{
					alert('Debe de proporcionar su correo electronico');
			}			
		}else{
				alert('Debe de proporcionar su Nombre');
		}
	});
	
});
function Municipios(){
	if ($('#estado :selected').val()>0){
		$.get("gee_search/consultas.php?op=2&idedo="+$('#estado :selected').val(),function(data){
			$('#municipio').html(data);
		});
	}else{
		alert("es cero");
	}
}
function Colonias(){
	if ($('#municipio :selected').val()>0){
		$.get("gee_search/consultas.php?op=3&idmun="+$('#municipio :selected').val(),function(data){
			$('#colonia').html(data);
		});
	}else{
		alert("es cero");
	}
}
function subtiposinm(){
	if ($('#colonia :selected').val()>0){
		$.get("gee_search/consultas.php?op=4&idcol="+$('#colonia :selected').val()+"&idmun="+$('#municipio :selected').val(),function(data){
			$('#subtipoinm').html(data);
		});
	}else{
		alert("es cero");
	}
}

function tiposinm(){
	if ($('#subtipoinm :selected').val()>0){
		$.get("gee_search/consultas.php?op=5&idtipo="+$('#subtipoinm :selected').val(),function(data){
			$('#tipoinm').html(data);
		});
	}else{
		alert("es cero");
	}	
}

function buscar(){
	$('#frmsearch').submit();
}



