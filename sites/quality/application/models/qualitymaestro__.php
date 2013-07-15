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
		# Oficina red
		$maestro['1']=array(
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
			'web1' =>	'qualityred.com.mx',
		    'web2' =>	'qualityred.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/',
			'emailcontacto'	=>	'qualitypropiedades@zootropostudio.com',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'1'
		);

		# Oficina guizar
		$maestro['108222']=array(
			'franquicia'	=>	'Quality Guizar',
			'direccion1'	=>	'Av. Patriotismo #553 Piso 2',
			'direccion2'	=>	'Ciudad De Los Deportes',
			'estado'	=>	'México, DF',
			'cp'	=>	'C.P. 03710',
			'email'	=>	'penamariadelcarmen@hotmail.com',
			'tel1'	=>	'(55)5611-3081',
			'tel2'	=>	'',
			'zona'	=>	'Patriotismo, Del Valle',
			'logo'	=>	'/images/logos/logo_guizar.png',
			'google' =>	'1445792-30',
			'web1' =>	'qualityguizar.com.mx',
			'web2' =>	'qualityguizar.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/guizar/',
			'emailcontacto'	=>	'penamariadelcarmen@hotmail.com',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'1'
     	);

		# Oficina habitat
		$maestro['112558']=array(
			'franquicia'	=>	'Quality Habitat',
			'direccion1'	=>	'Bosque de Ciruelos# 140',
			'direccion2'	=>	'Bosques De Las Lomas, Del. Miguel Hidalgo',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 11700',
			'email'	=>	'habitat@quality.com.mx',
			'tel1'	=>	'(55)5251-1521',
			'tel2'	=>	'',
			'zona'	=>	'Bosques y Lomas',
			'logo'	=>	'/images/logos/logo_habitat.png',
			'google' =>	'1445792-31',
			'web1' =>	'qualityhabitat.com.mx',
			'web2' =>	'qualityhabitat.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/habitat/',
			'emailcontacto'	=>	'habitat@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'1'
     	);

		# Oficina robina
		$maestro['110968']=array(
			'franquicia'   =>	'Quality Robina',
			'direccion1'   =>	'Repúblicas No. 122 interior 6',
			'direccion2'	=>	'Portales Sur Del. Benito Juárez',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03300',
			'email'	=>	'robina@quality.com.mx',
			'tel1'	=>	'(55)5659-7777',
			'tel2'	=>	'',
			'zona'	=>	'Portales Sur',
			'logo'	=>	'/images/logos/logo_robina.png',
			'google' =>	'1445792-29',
			'web1' =>	'qualityrobina.com.mx',
			'web2' =>	'qualityrobina.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/robina/',
			'emailcontacto'	=>	'robina@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'1'
		);
        // ----------------------------------------------------------


		// Franquiciatarios -----------------------------------------
     	# Oficina abc
     	$maestro['128243']=array(
     		'franquicia'	=>	'Quality ABC',
     		'direccion1'	=>	'Calzada de los Leones No.117 Piso 6',
     		'direccion2'	=>	'Col. Las Aguilas Del. Alvaro Obregón',
     		'estado'	=>	'México, D.F.',
     		'cp'	=>	'C.P. 01710',
     		'email'	=>	'abrilmichel@quality.com.mx',
     		'tel1'	=>	'(55)5635-9315',
     		'tel2'	=>	'',
     		'zona'	=>	'Lomas de las Aguilas',
     		'logo'	=>	'/images/logos/logo_abc.png',
     		'google' =>	'31755943-1',
     		'web1' =>	'qualityabc.com.mx',
     		'web2' =>	'qualityabc.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'abrilmichel@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

		# Oficina adviser
		$maestro['131719']=array(
			'franquicia'	=>	'Quality Adviser',
			'direccion1'	=>	'Guipuzcoa 108',
			'direccion2'	=>	'Col. Niños Heroes de Chapultepec, Del. Benito Juárez',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03440',
			'email'	=>	'infoadviser@quality.com.mx',
			'tel1'	=>	'(55)3599-4564',
			'tel2'	=>	'',
			'zona'	=>	'Portales, Alamos',
			'logo'	=>	'/images/logos/logo_adviser.png',
			'google' =>	'31757639-1',
			'web1' =>	'qualityadviser.com.mx',
			'web2' =>	'qualityadviser.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infoadviser@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina alar
     	$maestro['129639']=array(
     		'franquicia'	=>	'Quality Alar',
     		'direccion1'	=>	'Cruz de la Loma No.41',
     		'direccion2'	=>	'Col. Santa Cruz del Monte, Naucalpan',
     		'estado'	=>	'Estado de México',
     		'cp'	=>	'C.P. 53110',
     		'email'	=>	'hectoraguirre@quality.com.mx',
     		'tel1'	=>	'(55)5362-4797',
     		'tel2'	=>	'',
     		'zona'	=>	'Satélite, Lomas Verdes',
     		'logo'	=>	'/images/logos/logo_alar.png',
     		'google' =>	'31757639-1',
     		'web1' =>	'qualityalar.com.mx',
     		'web2' =>	'qualityalar.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'hectoraguirre@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

		# Oficina alianza
		$maestro['131718']=array(
			'franquicia'	=>	'Quality Alianza',
			'direccion1'	=>	'Pachuca 153',
			'direccion2'	=>	'Col. Condesa, Del. Cuauhtemoc',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 06140',
			'email'	=>	'infoalianza@qualiy.com.mx',
			'tel1'	=>	'(55)3599-4564',
			'tel2'	=>	'',
			'zona'	=>	'Condesa, Roma',
			'logo'	=>	'/images/logos/logo_alianza.png',
			'google' =>	'31757639-1',
			'web1' =>	'qualityalianza.com.mx',
			'web2' =>	'qualityalianza.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infoalianza@qualiy.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina berit
		$maestro['131679']=array(
		    'franquicia'	=>	'Quality Berit',
		    'direccion1'	=>	'Gabriel Mancera 1542',
		    'direccion2'	=>	'Col. del valle, Del. Benito Juárez',
		    'estado'	=>	'México, D.F.',
		    'cp'	=>	'C.P. 03104',
		    'email'	=>	'infoberit@quality.com.mx',
		    'tel1'	=>	'(55) 5534-1934',
		    'tel2'	=>	'',
		    'zona'	=>	'Del Valle',
		    'logo'	=>	'/images/logos/logo_berit.png',
		    'google' => '31759524-1',
     	    'web1' =>	'qualityberit.com.mx',
     		'web2' =>	'qualityberit.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infoberit@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina best
		$maestro['130026']=array(
		    'franquicia'	=>	'Quality Best',
		    'direccion1'	=>	'Privada Prosperidad No.264',
		    'direccion2'	=>	'Fracc. Los Médanos, Puerto Vallarta',
		    'estado'	=>	'Jalisco',
		    'cp'	=>	'C.P. 48290',
		    'email'	=>	'serviciosbest@quality.com.mx',
		    'tel1'	=>	'(322) 290-2800',
		    'tel2'	=>	'',
		    'zona'	=>	'Puerto Vallarta, Jalisco',
		    'logo'	=>	'/images/logos/logo_best.png',
		    'google' => '31759524-1',
     	    'web1' =>	'qualitybest.com.mx',
     		'web2' =>	'qualitybest.mx',
			'banner' =>	'/images/banners/bannerbest.jpg',
			'bannerlink' =>	'http://qualitybest.mlsvallarta.com/',
			'bannerclase' =>	'bannerbest',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'serviciosbest@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

		# Oficina city
		$maestro['131578']=array(
			'franquicia'	=>	'Quality City',
			'direccion1'	=>	'Av. Chapultepec 480 Torre Tribeca 4D',
			'direccion2'	=>	'Col. Americana, C.P. 44160',
			'estado'	=>	'Guadalajara, Jalisco',
			'cp'	=>	'C.P. 44160',
			'email'	=>	'infocumbre@quality.com.mx',
			'tel1'	=>	'(33) 3615-6096',
			'tel2'	=>	'',
			'zona'	=>	'Jalisco',
			'logo'	=>	'/images/logos/logo_city.png',
			'google' => '31759524-1',
			'web1' =>	'qualitycity.com.mx',
			'web2' =>	'qualitycity.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infocity@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina cumbre
		$maestro['131480']=array(
			'franquicia'	=>	'Quality Cumbre',
			'direccion1'	=>	'Av. Federalistas 1109',
			'direccion2'	=>	'Col. Real del Bosque, Zapopan',
			'estado'	=>	'Jalisco',
			'cp'	=>	'C.P. 45130',
			'email'	=>	'infocumbre@quality.com.mx',
			'tel1'	=>	'(33)3165-7857',
			'tel2'	=>	'',
			'zona'	=>	'Zapopan, Jalisco',
			'logo'	=>	'/images/logos/logo_cumbre.png',
			'google' => '31759524-1',
			'web1' =>	'qualitycumbre.com.mx',
			'web2' =>	'qualitycumbre.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infocumbre@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);


     	# Oficina cordova
		$maestro['129264']=array(
			'franquicia'	=>	'Quality Cordova',
			'direccion1'	=>	'Veladero No.2',
			'direccion2'	=>	'Fracc. Hacienda Jajalpa, Ocoyoacac',
			'estado'	=>	'Estado de México',
			'cp'	=>	'C.P. 52740',
			'email'	=>	'federicocordova@quality.com.mx',
			'tel1'	=>	'01800-838-3949',
			'tel2'	=>	'',
			'zona'	=>	'Toluca, Metepec',
			'logo'	=>	'/images/logos/logo_cordova.png',
			'google' =>	'31779605-1',
			'web1' =>	'qualitycordova.com.mx',
			'web2' =>	'qualitycordova.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'federicocordova@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina cristal
		$maestro['130134']=array(
			 'franquicia'	=>	'Quality Cristal',
			 'direccion1'	=>	'Paseo de San Juan No.46',
			 'direccion2'	=>	'Col. San Andrés Totoltepec, Del. Tlalpan',
			 'estado'	=>	'México, D.F.',
			 'cp'	=>	'C.P. 14400',
			 'email'	=>	'alejandragutierrez@quality.com.mx',
			 'tel1'	=>	'(55)5849-3782',
			 'tel2'	=>	'',
			 'zona'	=>	'Tlalpan',
			 'logo'	=>	'/images/logos/logo_cristal.png',
			 'google' =>	'31754138-1',
     		 'web1' =>	'qualitycristal.com.mx',
     		 'web2' =>	'qualitycristal.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'alejandragutierrez@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina diamante
		$maestro['130027']=array(
			'franquicia'	=>	'Quality Diamante',
			'direccion1'	=>	'Paseo de la Niña No.150 Torre 1519 Piso 18',
			'direccion2'	=>	'Fracc. De las Américas, Boca del Río',
			'estado'	=>	'Veracruz',
			'cp'	=>	'C.P. 94299',
			'email'	=>	'edgarcuapio@quality.com.mx',
			'tel1'	=>	'(299) 923-5644',
			'tel2'	=>	'',
			'zona'	=>	'Boca del Río, Veracruz',
			'logo'	=>	'/images/logos/logo_diamante.png',
			'google' =>	'31757941-1',
			'web1' =>	'qualitydiamante.com.mx',
     		'web2' =>	'qualitydiamante.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'edgarcuapio@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina flores
		$maestro['130100']=array(
			'franquicia'	=>	'Quality Flores',
			'direccion1'	=>	'Boulevard Puebla No. 6843 No.21',
			'direccion2'	=>	'Col. Real Campestre III, Puebla',
			'estado'	=>	'Puebla',
			'cp'	=>	'C.P. 72310',
			'email'	=>	'adrianflores@quality.com.mx',
			'tel1'	=>	'(222) 483-9944',
			'tel2'	=>	'',
			'zona'	=>	'Puebla',
			'logo'	=>	'/images/logos/logo_flores.png',
			'google' =>	'31757234-1',
			'web1' =>	'qualityflores.com.mx',
     		'web2' =>	'qualityflores.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'adrianflores@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina garza
		$maestro['129266']=array(
			'franquicia'	=>	'Quality Garza',
			'direccion1'	=>	'San Lorenzo No.232',
			'direccion2'	=>	'Col. Del Valle, Del. Benito Juárez',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03200',
			'email'	=>	'gildagarza@quality.com.mx',
			'tel1'	=>	'(55)5559-5217',
			'tel2'	=>	'',
			'zona'	=>	'Del Valle, Mixcoac',
			'logo'	=>	'/images/logos/logo_garza.png',
			'google' =>	'31754829-1',
			'web1' =>	'qualitygarza.com.mx',
     		'web2' =>	'qualitygarza.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'gildagarza@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina gmq
		$maestro['1273270']=array(
			'franquicia'	=>	'Quality GMQ',
			'direccion1'	=>	'Calle Loma de la Cañada No.29',
			'direccion2'	=>	'Col. Loma Dorada, Querétaro',
			'estado'	=>	'Querétaro',
			'cp'	=>	'C.P. 76060',
			'email'	=>	'gerardomontoya@quality.com.mx',
			'tel1'	=>	'(461) 223-1242',
			'tel2'	=>	'',
			'zona'	=>	'Querétaro',
			'logo'	=>	'/images/logos/logo_gmq.png',
			'google' =>	'01 442 22231242',
			'web1' =>	'qualitygmq.com.mx',
     		'web2' =>	'qualitygmq.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'gerardomontoya@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'

     	);
				# Oficina gms
				$maestro['12732701']=array(
					'franquicia'	=>	'Quality GMS',
					'direccion1'	=>	'Calle Loma de la Cañada No.29',
					'direccion2'	=>	'Col. Loma Dorada, Querétaro',
					'estado'	=>	'Querétaro',
					'cp'	=>	'C.P. 76060',
					'email'	=>	'gerardomontoya@quality.com.mx',
					'tel1'	=>	'0444611800253',
					'tel2'	=>	'',
					'zona'	=>	'San Juan del Río',
					'logo'	=>	'/images/logos/logo_gmq.png',
					'google' =>	'1445792-35',
					'web1' =>	'qualitygmq.com.mx',
					'web2' =>	'qualitygmq.mx',
					'banner' =>	'/images/banners/bannerhome.gif',
					'bannerlink' =>	'#',
					'bannerclase' =>	'banneranimado',
					'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
					'emailcontacto'	=>	'gerardomontoya@quality.com.mx',
					'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
					'socio' =>	'0'
				);
				# Oficina gmt
				$maestro['12732702']=array(
					'franquicia'	=>	'Quality GMT',
					'direccion1'	=>	'Calle Loma de la Cañada No.29',
					'direccion2'	=>	'Col. Loma Dorada, Querétaro',
					'estado'	=>	'Querétaro',
					'cp'	=>	'C.P. 76060',
					'email'	=>	'gerardomontoya@quality.com.mx',
					'tel1'	=>	'0444611800253',
					'tel2'	=>	'',
					'zona'	=>	'Tequisquiapan',
					'logo'	=>	'/images/logos/logo_gmq.png',
					'google' =>	'1445792-35',
					'web1' =>	'qualitygmq.com.mx',
					'web2' =>	'qualitygmq.mx',
					'banner' =>	'/images/banners/bannerhome.gif',
					'bannerlink' =>	'#',
					'bannerclase' =>	'banneranimado',
					'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
					'emailcontacto'	=>	'gerardomontoya@quality.com.mx',
					'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
					'socio' =>	'0'
				);
				# Oficina gmc
				$maestro['12732703']=array(
					'franquicia'	=>	'Quality GMC',
					'direccion1'	=>	'Calle Loma de la Cañada No.29',
					'direccion2'	=>	'Col. Loma Dorada, Querétaro',
					'estado'	=>	'Querétaro',
					'cp'	=>	'C.P. 76060',
					'email'	=>	'gerardomontoya@quality.com.mx',
					'tel1'	=>	'(461) 223 1242',
					'tel2'	=>	'',
					'zona'	=>	'Celaya',
					'logo'	=>	'/images/logos/logo_gmq.png',
					'google' =>	'014616162965',
					'web1' =>	'qualitygmq.com.mx',
					'web2' =>	'qualitygmq.mx',
					'banner' =>	'/images/banners/bannerhome.gif',
					'bannerlink' =>	'#',
					'bannerclase' =>	'banneranimado',
					'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
					'emailcontacto'	=>	'gerardomontoya@quality.com.mx',
					'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
					'socio' =>	'0'
				);


     	# Oficina gold
		$maestro['131202']=array(
			'franquicia'	=>	'Quality Gold',
			'direccion1'	=>	'Málaga Norte # 6 Despacho 6',
			'direccion2'	=>	'Col. Extremadura Insurgentes, Del. Benito Juárez',
			'estado'	=>	'México, DF',
			'cp'	=>	'C.P. 03740',
			'email'	=>	'infogold@quality.com.mx',
			'tel1'	=>	'(55)4324-2839',
			'tel2'	=>	'',
			'zona'	=>	'Villa Verdún, Santa Fe',
			'logo'	=>	'/images/logos/logo_gold.png',
			'google' =>	'31754139-1',
			'web1' =>	'qualitygold.com.mx',
		    'web2' =>	'qualitygold.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infogold@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);


     	# Oficina hernandez
		$maestro['128501']=array(
			'franquicia'	=>	'Quality Hernández',
			'direccion1'	=>	'Puente Titla No.53B D-101',
			'direccion2'	=>	'Col. Ricardo Flores Magón, Del. Iztapalapa',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 09820',
			'email'	=>	'franciscohernandez@quality.com.mx',
			'tel1'	=>	'(55)5686-9184',
			'tel2'	=>	'',
			'zona'	=>	'Coyoacan, Iztapalapa',
			'logo'	=>	'/images/logos/logo_hernandez.png',
			'google' =>	'31757942-1',
			'web1' =>	'qualityhernandez.com.mx',
		    'web2' =>	'qualityhernandez.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'franciscohernandez@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina isla
		$maestro['130424']=array(
			'franquicia'	=>	'Quality Isla',
			'direccion1'	=>	'Lauro Aguirre No.152 B-6',
			'direccion2'	=>	'Col. Agricultura, Del. Miguel Hidalgo',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 11360',
			'email'	=>	'leticiamartinez@quality.com.mx',
			'tel1'	=>	'(55)5396-0991',
			'tel2'	=>	'',
			'zona'	=>	'Miguel Hidalgo',
			'logo'	=>	'/images/logos/logo_isla.png',
			'google' =>	'31754329-1',
			'web1' =>	'qualityisla.com.mx',
     		'web2' =>	'qualityisla.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'leticiamartinez@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina king
		$maestro['130718']=array(
			'franquicia'	=>	'Quality King',
			'direccion1'	=>	'Playa Mirador No.471',
			'direccion2'	=>	'Col. Militar Marte, Del. Iztacalco',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 08830',
			'email'	=>	'mariluflores@quality.com.mx',
			'tel1'	=>	'(55)5598-5913',
			'tel2'	=>	'',
			'zona'	=>	'Marte, Iztacalco',
			'logo'	=>	'/images/logos/logo_king.png',
			'google' =>	'31759638-1',
			'web1' =>	'qualityking.com.mx',
     		'web2' =>	'qualityking.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'mariluflores@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina mailo
		$maestro['129569']=array(
			'franquicia'	=>	'Quality Mailo',
			'direccion1'	=>	'Montecito 38, Piso 372, Oficina 33 WTC',
			'direccion2'	=>	'Col. Nápoles, Del. Benito Juárez',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03810',
			'email'	=>	'infomailo@quality.com.mx',
			'tel1'	=>	'(55)5448-5835',
			'tel2'	=>	'',
			'zona'	=>	'San Jerónimo, San Bernabé',
			'logo'	=>	'/images/logos/logo_mailo.png',
			'google' =>	'31779607-1',
			'web1' =>	'qualitymailo.com.mx',
     		'web2' =>	'qualitymailo.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infomailo@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina marasa
		$maestro['131054']=array(
			'franquicia'	=>	'Quality Marasa',
			'direccion1'	=>	'Retorno 23',
			'direccion2'	=>	'Col. Avante, Del. Coyoacán',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 04460',
			'email'	=>	'infomarasa@quality.com.mx',
			'tel1'	=>	'(55)5555-0015',
			'tel2'	=>	'',
			'zona'	=>	'Avante, Coyoacán',
			'logo'	=>	'/images/logos/logo_marasa.png',
			'google' =>	'31761428-1',
			'web1' =>	'qualitymarasa.com.mx',
     		'web2' =>	'qualitymarasa.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infomarasa@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina mil
		$maestro['130412']=array(
			'franquicia'	=>	'Quality Mil',
			'direccion1'	=>	'Diagonal San Antonio No.1118-5B',
			'direccion2'	=>	'Col. Narvarte, Del. Benito Juárez',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03020',
			'email'	=>	'marceladelcarmenvilla@quality.com.mx',
			'tel1'	=>	'(55)5687-2053',
			'tel2'	=>	'',
			'zona'	=>	'Narvarte, Del Valle',
			'logo'	=>	'/images/logos/logo_mil.png',
			'google' =>	'31759330-1',
			'web1' =>	'qualitymil.com.mx',
     		'web2' =>	'qualitymil.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'marceladelcarmenvilla@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina noriega
		$maestro['127759']=array(
			'franquicia'	=>	'Quality Noriega',
			'direccion1'	=>	'Calle Juarez No.63 casa 5',
			'direccion2'	=>	'Col. Miguel Hidalgo 2a.Sección',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 14250',
			'email'	=>	'bernardomelendez@quality.com.mx',
			'tel1'	=>	'(55)3184-8869',
			'tel2'	=>	'',
			'zona'	=>	'Tlalpan',
			'logo'	=>	'/images/logos/logo_noriega.png',
			'google' =>	'31757236-1',
			'web1' =>	'qualitynoriega.com.mx',
     		'web2' =>	'qualitynoriega.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'bernardomelendez@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

     	# Oficina ocsa
		$maestro['127048']=array(
		    'franquicia'	=>	'Quality Ocsa',
		    'direccion1'	=>	'Calzada de los Leones No.117 Piso 6',
		    'direccion2'	=>	'Las Aguilas Del. Alvaro Obregón',
		    'estado'	=>	'México, D.F.',
		    'cp'	=>	'C.P. 01710',
		    'email'	=>	'agustinochoa@quality.com.mx',
		    'tel1'	=>	'(55)5601-7408',
		    'tel2'	=>	'',
		    'zona'	=>	'Del Valle, Nápoles',
		    'logo'	=>	'/images/logos/logo_ocsa.png',
		    'google' =>	'1445792-33',
		    'web1' =>	'qualityocsa.com.mx',
     		'web2' =>	'qualityocsa.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'agustinochoa@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina ogorman
		$maestro['130930']=array(
		    'franquicia'	=>	'Quality Ogorman',
		    'direccion1'	=>	'Pleamares No. 55',
		    'direccion2'	=>	'Las Aguilas Del. Alvaro Obregón',
		    'estado'	=>	'México, D.F.',
		    'cp'	=>	'C.P. 01710',
		    'email'	=>	'tomasogorman@quality.com.mx',
		    'tel1'	=>	'(55)5593-0876',
		    'tel2'	=>	'',
		    'zona'	=>	'Águilas, San Ángel',
		    'logo'	=>	'/images/logos/logo_ogorman.png',
		    'google' =>	'31779608-1',
		    'web1' =>	'qualityogorman.com.mx',
     		'web2' =>	'qualityogorman.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'tomasogorman@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina plus
		$maestro['129688']=array(
			'franquicia'	=>	'Quality Plus',
			'direccion1'	=>	'Insurgentes Sur No.1824-302',
		    'direccion2'	=>	'Florida, Del. Alvaro Obregón',
			'estado'	=>	'México, D.F.',
		    'cp'	=>	'C.P. 01030',
			'email'	=>	'luisortega@quality.com.mx',
			'tel1'	=>	'(55)5782-4441',
			'tel2'	=>	'',
			'zona'	=>	'Del Valle Coyoacan',
			'logo'	=>	'/images/logos/logo_plus.png',
			'google' =>	'1445792-42',
			'web1' =>	'qualityplus.com.mx',
     		'web2' =>	'qualityplus.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'luisortega@quality.com.mx',
			'emailintegrate' =>	'luisortega@quality.com.mx',
			'socio' =>	'0'
		);

		# Oficina premium
		$maestro['130950']=array(
			'franquicia'	=>	'Quality Premium',
			'direccion1'	=>	'Av. Lomas Verdes No.825 Local 505',
			'direccion2'	=>	'Planta baja, Edificio Heliplaza',
			'estado'	=>	'Naucalpan, Estado de México',
			'cp'	=>	'C.P.53120',
			'email'	=>	'infopremium@quality.com.mx',
			'tel1'	=>	'(55) 2625-2205',
			'tel2'	=>	'',
			'zona'	=>	'Naucalpan, Atizapán',
			'logo'	=>	'/images/logos/logo_premium.png',
			'google' =>	'31754530-1',
			'web1' =>	'qualitypremium.com.mx',
     		'web2' =>	'qualitypremium.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infopremium@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina progreso
		$maestro['130099']=array(
			'franquicia'	=>	'Quality Progreso',
		    'direccion1'	=>	'Maricopa No.10 Piso 9',
			'direccion2'	=>	'Nápoles, Del. Benito Juárez',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03810',
			'email'	=>	'adanfernandez@quality.com.mx',
			'tel1'	=>	'(55)5687-6128',
			'tel2'	=>	'(55)4596-6131',
			'zona'	=>	'Nápoles, Roma',
			'logo'	=>	'/images/logos/logo_progreso.png',
		    'google' =>	'31758941-1',
		    'web1' =>	'qualityprogreso.com.mx',
     		'web2' =>	'qualityprogreso.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'adanfernandez@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina provel
		$maestro['130924']=array(
			'franquicia'	=>	'Quality Provel',
			'direccion1'	=>	'Insurgentes Sur No.1188-1009',
			'direccion2'	=>	'Del Valle, Del. Benito Juárez',
		    'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 03200',
			'email'	=>	'infoprovel@quality.com.mx',
			'tel1'	=>	'(55)2614-3288',
			'tel2'	=>	'(55)3623-9470',
			'zona'	=>	'Del Valle',
			'logo'	=>	'/images/logos/logo_provel.png',
			'google' =>	'31754143-1',
			'web1' =>	'qualityprovel.com.mx',
     		'web2' =>	'qualityprovel.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infoprovel@quality.com.mx',
			'emailintegrate' =>	'infoprovel@quality.com.mx',
			'socio' =>	'0'
		);


		# Oficina romero
		$maestro['129397']=array(
			'franquicia'   =>	'Quality Romero',
			'direccion1'   =>	'Corregidora No.468',
			'direccion2'	=>	'Miguel Hidalgo, Del. Tlalpan',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 14250',
			'email'	=>	'cesarromero@quality.com.mx',
			'tel1'	=>	'(55)5666-1032',
			'tel2'	=>	'',
			'zona'	=>	'Pedregal, Tepepan',
			'logo'	=>	'/images/logos/logo_romero.png',
			'google' =>	'31754249-1',
			'web1' =>	'qualityromero.com.mx',
		    'web2' =>	'qualityromero.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'cesarromero@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

		# Oficina salazar
		$maestro['128844']=array(
			'franquicia'   =>	'Quality Salazar',
			'direccion1'   =>	'Calle 11 No.236',
			'direccion2'	=>	'Porvenir, Del. Azcapotzalco',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 02940',
			'email'	=>	'eduardosalazar@quality.com.mx',
			'tel1'	=>	'(55)5556-1973',
			'tel2'	=>	'',
			'zona'	=>	'Satélite',
			'logo'	=>	'/images/logos/logo_salazar.png',
			'google' =>	'31760636-1',
			'web1' =>	'qualitysalazar.com.mx',
     		'web2' =>	'qualitysalazar.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'eduardosalazar@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

		# Oficina patricia schutte
		$maestro['126355']=array(
			'franquicia'   =>	'Quality Patricia Schutte',
			'direccion1'   =>	'Julian Adame No.114 C-9',
			'direccion2'	=>	'El Molino Del. Cuajimalpa',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 05240',
		    'email'	=>	'ps@quality.com.mx',
			'tel1'	=>	'(55) 5813 0247',
			'tel2'	=>	'',
			'zona'	=>	'Cuajimalpa De Morelos',
			'logo'	=>	'/images/logos/logo_schutte.png',
			'google' =>	'1445792-28',
			'web1' =>	'qualitypatriciaschutte.com.mx',
     		'web2' =>	'qualitypatriciaschutte.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'ps@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
     	);

		# Oficina sol
		$maestro['129972']=array(
			'franquicia'   =>	'Quality Sol',
			'direccion1'   =>	'Privada del Sol No.1 altos',
			'direccion2'	=>	'Santa María Acuitlapilco, Tlaxcala',
			'estado'	=>	'Tlaxcala',
			'cp'	=>	'C.P. 90110',
			'email'	=>	'gustavocuapio@quality.com.mx',
			'tel1'	=>	'(246)468-1948',
			'tel2'	=>	'',
			'zona'	=>	'Tlaxcala',
			'logo'	=>	'/images/logos/logo_sol.png',
			'google' =>	'31756043-1',
			'web1' =>	'qualitysol.com.mx',
     		'web2' =>	'qualitysol.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'gustavocuapio@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina star
		$maestro['131053']=array(
			'franquicia'   =>	'Quality Star',
		    'direccion1'   =>	'Javier Barros Sierra No.225,Edif-B Depto. PB02',
			'direccion2'	=>	'Santa Fé, Del. Alvaro Obregón',
			'estado'	=>	'México, D.F.',
		    'cp'	=>	'C.P. 01210',
			'email'	=>	'infostar@quality.com.mx',
			'tel1'	=>	'(55)5292-0847',
			'tel2'	=>	'',
			'zona'	=>	'Santa Fé, Cuajimalpa',
			'logo'	=>	'/images/logos/logo_star.png',
			'google' =>	'31754432-1',
			'web1' =>	'qualitystar.com.mx',
     		'web2' =>	'qualitystar.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infostar@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina sterling
		$maestro['130543']=array(
			'franquicia'   =>	'Quality Sterling',
			'direccion1'   =>	'Boulevard Bernardo Quintana No.9800',
			'direccion2'	=>	'Centro Sur, Querétaro',
			'estado'	=>	'Querétaro',
			'cp'	=>	'C.P. 76904',
			'email'	=>	'ernestozepeda@quality.com.mx',
		    'tel1'	=>	'(442) 161-2607',
			'tel2'	=>	'',
			'zona'	=>	'Querétaro',
			'logo'	=>	'/images/logos/logo_sterling.png',
			'google' =>	'31756536-1',
			'web1' =>	'qualitysterling.com.mx',
     		'web2' =>	'qualitysterling.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'ernestozepeda@quality.com.mx',
			'emailintegrate' =>	'ernestozepeda@quality.com.mx',
			'socio' =>	'0'
		);

		# Oficina sur
		$maestro['108084']=array(
			'franquicia'   =>	'Quality Sur',
			'direccion1'   =>	'Calz. de los Leones No.117 Piso 6',
			'direccion2'	=>	'Las Aguilas Del. Alvaro Obregón',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 01710',
			'email'	=>	'qualitysur@quality.com.mx',
		    'tel1'	=>	'(55)5664-3535',
			'tel2'	=>	'',
			'zona'	=>	'Las Águilas, San Ángel',
			'logo'	=>	'/images/logos/logo_sur.png',
			'google' =>	'1445792-27',
			'web1' =>	'qualitysur.com.mx',
     		'web2' =>	'qualitysur.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'carmentorres@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina total
		$maestro['127758']=array(
			'franquicia'   =>	'Quality Total',
			'direccion1'   =>	'Calle 4 No.500 Altos',
			'direccion2'	=>	'Centro, Córdob',
		    'estado'	=>	'Veracruz, Mex',
			'cp'	=>	'C.P. 94500',
			'email'	=>	'elisafernandez@quality.com.mx',
			'tel1'	=>	'(271) 143-5196',
			'tel2'	=>	'(272) 148-1067',
			'zona'	=>	'Cordoba, Orizaba',
			'logo'	=>	'/images/logos/logo_total.png',
			'google' =>	'31758946-1',
			'web1' =>	'qualitytotal.com.mx',
     		'web2' =>	'qualitytotal.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'elisafernandez@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);
				# Oficina totalorizaba
				$maestro['1277581']=array(
					'franquicia'   =>	'Quality Total',
					'direccion1'   =>	'Calle 4 No.500 Altos',
					'direccion2'	=>	'Centro, Córdob',
					'estado'	=>	'Veracruz, Mex',
					'cp'	=>	'C.P. 94500',
					'email'	=>	'elisafernandez@quality.com.mx',
					'tel1'	=>	'(272) 148-1067',
					'tel2'	=>	'',
					'zona'	=>	'Cordoba, Orizaba',
					'logo'	=>	'/images/logos/logo_total.png',
					'google' =>	'31758946-1',
					'web1' =>	'qualitytotal.com.mx',
					'web2' =>	'qualitytotal.mx',
					'banner' =>	'/images/banners/bannerhome.gif',
					'bannerlink' =>	'#',
					'bannerclase' =>	'banneranimado',
					'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
					'emailcontacto'	=>	'elisafernandez@quality.com.mx',
					'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
					'socio' =>	'0'
				);

		# Oficina ubereta
		$maestro['131055']=array(
			'franquicia'   =>	'Quality Ubereta',
			'direccion1'   =>	'Darwin No.32 Oficina 401',
			'direccion2'	=>	'Anzures, Del. Miguel Hidalgo',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 11590',
			'email'	=>	'infoubereta@quality.com.mx',
			'tel1'	=>	'(55)6304-8847',
			'tel2'	=>	'',
			'zona'	=>	'Anzures, Polanco',
			'logo'	=>	'/images/logos/logo_ubereta.png',
			'google' =>	'31761336-1',
			'web1' =>	'qualityubereta.com.mx',
     		'web2' =>	'qualityubereta.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'infoubereta@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina unique
		$maestro['129971']=array(
			'franquicia'   =>	'Quality Unique',
		    'direccion1'   =>	'Retorno del Anáhuac',
			'direccion2'	=>	'Lomas de las Palmas, Huixquilucan',
			'estado'	=>	'Estado de México',
			'cp'	=>	'C.P. 52788',
		    'email'	=>	'anamariabateman@quality.com.mx',
			'tel1'	=>	'(55)5523-3344',
			'tel2'	=>	'',
			'zona'	=>	'Herradura, Tecamachalco',
			'logo'	=>	'/images/logos/logo_unique.png',
			'google' =>	'31754736-1',
			'web1' =>	'qualityunique.com.mx',
     		'web2' =>	'qualityunique.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'anamariabateman@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
		);

		# Oficina uribe
		$maestro['126931']=array(
			'franquicia'   =>	'Quality Uribe',
			'direccion1'   =>	'Hortensia No.135-2',
			'direccion2'	=>	'Florida Del. Alvaro Obregón',
			'estado'	=>	'México, D.F.',
			'cp'	=>	'C.P. 01030',
			'email'	=>	'rociouribe@quality.com.mx',
			'tel1'	=>	'(55)5661-6042',
			'tel2'	=>	'',
			'zona'	=>	'Florida',
			'logo'	=>	'/images/logos/logo_uribe.png',
			'google' =>	'31759529-1',
			'web1' =>	'qualityuribe.com.mx',
     		'web2' =>	'qualityuribe.mx',
			'banner' =>	'/images/banners/bannerhome.gif',
			'bannerlink' =>	'#',
			'bannerclase' =>	'banneranimado',
			'linkmembresias' =>	'http://qualityfranquicias.com.mx/membresias/',
			'emailcontacto'	=>	'rociouribe@quality.com.mx',
			'emailintegrate' =>	'qualitymembresias@zootropostudio.com',
			'socio' =>	'0'
       );

   // Socios ---------------------------------------------------

		switch ($_SERVER['HTTP_HOST']){
			case 'www.quality.com.mx':
			case 'www.quality.mx':
			case 'quality.com.mx':
			case 'quality.mx':
			case 'quality.com':

										$site=$maestro['0'];
										break;
		}
		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityred.com.mx':
			case 'www.qualityred.mx':
			case 'qualityred.com.mx':
			case 'qualityred.mx':
			case 'qualityred.com':

										$site=$maestro['1'];
										break;
		}
		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityguizar.com.mx':
			case 'www.qualityguizar.mx':
			case 'qualityguizar.com.mx':
			case 'qualityguizar.mx':
										$site=$maestro['108222'];
										break;
		}
		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityhabitat.com.mx':
			case 'www.qualityhabitat.mx':
			case 'qualityhabitat.com.mx':
			case 'qualityhabitat.mx':
										$site=$maestro['112558'];
										break;
		}
		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityrobina.com.mx':
			case 'www.qualityrobina.mx':
			case 'qualityrobina.com.mx':
			case 'qualityrobina.mx':

										$site=$maestro['110968'];
										break;
		}
  // -----------------------------------------------------------

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityabc.com.mx':
			case 'www.qualityabc.mx':
			case 'qualityabc.com.mx':
			case 'qualityabc.mx':
			case 'qualityabc.com':
										$site=$maestro['128243'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityadviser.com.mx':
			case 'www.qualityadviser.mx':
			case 'qualityadviser.com.mx':
			case 'qualityadviser.mx':
										$site=$maestro['131719'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityalar.com.mx':
			case 'www.qualityalar.mx':
			case 'qualityalar.com.mx':
			case 'qualityalar.mx':
			case 'qualityalar.com':
										$site=$maestro['129639'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityalianza.com.mx':
			case 'www.qualityalianza.mx':
			case 'qualityalianza.com.mx':
			case 'qualityalianza.mx':
										$site=$maestro['131718'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityberit.com.mx':
			case 'www.qualityberit.mx':
			case 'qualityberit.com.mx':
			case 'qualityberit.mx':
										$site=$maestro['131679'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitybest.com.mx':
			case 'www.qualitybest.mx':
			case 'qualitybest.com.mx':
			case 'qualitybest.mx':
										$site=$maestro['130026'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitycity.com.mx':
			case 'www.qualitycity.mx':
			case 'qualitycity.com.mx':
			case 'qualitycity.mx':
										$site=$maestro['131578'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitycumbre.com.mx':
			case 'www.qualitycumbre.mx':
			case 'qualitycumbre.com.mx':
			case 'qualitycumbre.mx':
										$site=$maestro['131480'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitycordova.com.mx':
			case 'www.qualitycordova.mx':
			case 'qualitycordova.com.mx':
			case 'qualitycordova.mx':
										$site=$maestro['129264'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitycristal.com.mx':
			case 'www.qualitycristal.mx':
			case 'qualitycristal.com.mx':
			case 'qualitycristal.mx':
										$site=$maestro['130134'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitydiamante.com.mx':
			case 'www.qualitydiamante.mx':
			case 'qualitydiamante.com.mx':
			case 'qualitydiamante.mx':
										$site=$maestro['130027'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityflores.com.mx':
			case 'www.qualityflores.mx':
			case 'qualityflores.com.mx':
			case 'qualityflores.mx':
										$site=$maestro['130100'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitygarza.com.mx':
			case 'www.qualitygarza.mx':
			case 'qualitygarza.com.mx':
			case 'qualitygarza.mx':
										$site=$maestro['129266'];
										break;
		}


		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitygmq.com.mx':
			case 'www.qualitygmq.mx':
			case 'qualitygmq.com.mx':
			case 'qualitygmq.mx':
										$site=$maestro['1273270'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitygold.com.mx':
			case 'www.qualitygold.mx':
			case 'qualitygold.com.mx':
			case 'qualitygold.mx':
										$site=$maestro['131202'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityhernandez.com.mx':
			case 'www.qualityhernandez.mx':
			case 'qualityhernandez.com.mx':
			case 'qualityhernandez.mx':
										$site=$maestro['128501'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityisla.com.mx':
			case 'www.qualityisla.mx':
			case 'qualityisla.com.mx':
			case 'qualityisla.mx':
										$site=$maestro['130424'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityking.com.mx':
			case 'www.qualityking.mx':
			case 'qualityking.com.mx':
			case 'qualityking.mx':
										$site=$maestro['130718'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitymailo.com.mx':
			case 'www.qualitymailo.mx':
			case 'qualitymailo.com.mx':
			case 'qualitymailo.mx':
										$site=$maestro['129569'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitymarasa.com.mx':
			case 'www.qualitymarasa.mx':
			case 'qualitymarasa.com.mx':
			case 'qualitymarasa.mx':
										$site=$maestro['131054'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitymil.com.mx':
			case 'www.qualitymil.mx':
			case 'qualitymil.com.mx':
			case 'qualitymil.mx':
										$site=$maestro['130412'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitynoriega.com.mx':
			case 'www.qualitynoriega.mx':
			case 'qualitynoriega.com.mx':
			case 'qualitynoriega.mx':
										$site=$maestro['127759'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityocsa.com.mx':
			case 'www.qualityocsa.mx':
			case 'qualityocsa.com.mx':
			case 'qualityocsa.mx':

										$site=$maestro['127048'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityogorman.com.mx':
			case 'www.qualityogorman.mx':
			case 'qualityogorman.com.mx':
			case 'qualityogorman.mx':

										$site=$maestro['130930'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityplus.com.mx':
			case 'www.qualityplus.mx':
			case 'qualityplus.com.mx':
			case 'qualityplus.mx':

										$site=$maestro['129688'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitypremium.com.mx':
			case 'www.qualitypremium.mx':
			case 'qualitypremium.com.mx':
			case 'qualitypremium.mx':

										$site=$maestro['130950'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityprogreso.com.mx':
			case 'www.qualityprogreso.mx':
			case 'qualityprogreso.com.mx':
			case 'qualityprogreso.mx':

										$site=$maestro['130099'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityprovel.com.mx':
			case 'www.qualityprovel.mx':
			case 'qualityprovel.com.mx':
			case 'qualityprovel.mx':

										$site=$maestro['130924'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityromero.com.mx':
			case 'www.qualityromero.mx':
			case 'qualityromero.com.mx':
			case 'qualityromero.mx':

										$site=$maestro['129397'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitysalazar.com.mx':
			case 'www.qualitysalazar.mx':
			case 'qualitysalazar.com.mx':
			case 'qualitysalazar.mx':

										$site=$maestro['128844'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitypatriciaschutte.com.mx':
			case 'www.qualitypatriciaschutte.mx':
			case 'qualitypatriciaschutte.com.mx':
			case 'qualitypatriciaschutte.mx':

										$site=$maestro['126355'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
		    case 'www.qualitysol.com.mx':
			case 'www.qualitysol.mx':
			case 'qualitysol.com.mx':
			case 'qualitysol.mx':

										$site=$maestro['129972'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitystar.com.mx':
			case 'www.qualitystar.mx':
			case 'qualitystar.com.mx':
			case 'qualitystar.mx':

										$site=$maestro['131053'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitysterling.com.mx':
			case 'www.qualitysterling.mx':
			case 'qualitysterling.com.mx':
			case 'qualitysterling.mx':

										$site=$maestro['130543'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitysur.com.mx':
			case 'www.qualitysur.mx':
			case 'qualitysur.com.mx':
			case 'qualitysur.mx':

										$site=$maestro['108084'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualitytotal.com.mx':
			case 'www.qualitytotal.mx':
			case 'qualitytotal.com.mx':
			case 'qualitytotal.mx':

										$site=$maestro['127758'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityubereta.com.mx':
			case 'www.qualityubereta.mx':
			case 'qualityubereta.com.mx':
			case 'qualityubereta.mx':

										$site=$maestro['131055'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityunique.com.mx':
			case 'www.qualityunique.mx':
			case 'qualityunique.com.mx':
			case 'qualityunique.mx':

										$site=$maestro['129971'];
										break;
		}

		switch ($_SERVER['HTTP_HOST']){
			case 'www.qualityuribe.com.mx':
			case 'www.qualityuribe.mx':
			case 'qualityuribe.com.mx':
			case 'qualityuribe.mx':
			case 'qualityuribe.com':

										$site=$maestro['126931'];
										break;
		}


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
