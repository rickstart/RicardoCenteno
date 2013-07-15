<?php

class Qualitymaestro extends CI_Model {

    var $title   = '';
     var $content = '';
     var $date    = '';

    function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }


    function offices()
     {

     	$maestro=array();
     	$site=array();
		// Socios ---------------------------------------------------
		# Oficina Principal
		$maestro['0']=array(
			'franquicia'   =>	'Quality Viendo por tí',
			'direccion1'   =>	'Para mayor Información',
			'direccion2'	=>	'',
			'estado'	=>	'nuestras oficinas',
			'cp'	=>	'Escríbenos o Contacta ',
			'email'	=>	'',
			'tel1'	=>	'<a href="/oficinas">Ver oficinas</a>',
			'tel2'	=>	'',
			'zona'	=>	'',
			'logo'	=>	'/images/logos/logo.png',
			'google' =>	'31758843-1',
			'web1' =>	'quality.com.mx',
		    'web2' =>	'quality.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/socios/',
			'emailcontacto'	=>	'qualitypropiedades@zootropostudio.com',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'1'
			
		);
		$site=$maestro['0'];

   // Socios ---------------------------------------------------

		

										
	


		$locations=array(
			'Distrito Federal'	=>	array(
										'edo'	=>	'Distrito Federal',
										'ancla'	=>	'df',
										'map'	=>	'/images/oficinas/mapa_df.jpg',
										'id'	=>	array(108084, 128243,131719, 131718 , 131679, 130134, 129266, 108222, 131202,112558,128501,130424,130718,129569,131054,130412,127759,127048,130930,126355,129688,130099,130924,110968,129397,128844,131053,131055,126931)
									),

			'Estado de Mexico'	=>	array(
										'edo'	=>	'Estado de Mexico',
										'ancla'	=>	'edo',
										'map'	=>	'/images/oficinas/mapa_edo_mexico.jpg',
										'id'	=>	array(129639, 129264, 130950,129971)
									),

			'Guanajuato'	=>	array(
										'edo'	=>	'Guanajuato',
										'ancla'	=>	'gua',
										'map'	=>	'/images/oficinas/mapa_guanajuato.jpg',
										'id'	=>	array(12732703)
									),

			'Jalisco'	=>	array(
										'edo'	=>	'Jalisco',
										'ancla'	=>	'jal',
										'map'	=>	'/images/oficinas/mapa_jalisco.jpg',
										'id'	=>	array(130026, 131578, 131480)
									),


			'Puebla'	=>	array(
										'edo'	=>	'Puebla',
										'ancla'	=>	'pue',
										'map'	=>	'/images/oficinas/mapa_puebla.jpg',
										'id'	=>	array(130100)
									),

			'Queretaro'	=>	array(
										'edo'	=>	'Querétaro',
										'ancla'	=>	'quer',
										'map'	=>	'/images/oficinas/mapa_queretaro.jpg',
										'id'	=>	array(1273270,12732701,12732702,130543)
									),

			'Tlaxcala'	=>	array(
										'edo'	=>	'Tlaxcala',
										'ancla'	=>	'tlax',
										'map'	=>	'/images/oficinas/mapa_tlaxcala.jpg',
										'id'	=>	array(129972)
									),

			'Veracruz'	=>	array(
										'edo'	=>	'Veracruz',
										'ancla'	=>	'ver',
										'map'	=>	'/images/oficinas/mapa_veracruz.jpg',
										'id'	=>	array(130027,127758)
									)
		);

		return array(
			'maestro'	=>	$maestro,
		    'site'		=>	$site,
		    'locations'	=>	$locations
     	);

     }

}
?>
