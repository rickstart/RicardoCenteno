<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle extends CI_Controller {

	public function index()
	{

			$this->load->model('qualitymaestro');
			$maestro=$this->qualitymaestro->offices();

	        // Añadimos las reglas de validacion
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('names', 'Nombre');
			$this->form_validation->set_rules('tels', 'Teléfono');
			$this->form_validation->set_rules('mail', 'Email');
			$this->form_validation->set_rules('emailcontacto', 'Franquicia');
			$this->form_validation->set_rules('franquicianombre', 'Franquicia Nombre');


			if ($this->form_validation->run() == FALSE)
			{
				$contenido=$this->load->view('t_detalle',$maestro, true);
				$banner=$this->load->view('banner',$maestro, true);
				$this->load->view('template',array("contenido"=>$contenido, "banner"=>$banner));
			}

			// Manda email y confirma el envio
			else
			{

			$this->load->library('email');
			//$this->email->clear();

			$config['mailtype'] = 'text';
			$config['newline'] = '\r\n';
			$config['crlf'] = '\r\n';
			$config['protocol'] = 'sendmail';
			$this->email->initialize($config);

			$this->email->from($_POST['mail']);
			$this->email->to($_POST['emailcontacto']);

			$franquicianombrevar = ($_POST['franquicianombre']);
			$this->email->subject('Detalle de propiedades | ' . $franquicianombrevar);

			$nombrevar = ($_POST['names']);
			$telsvar = ($_POST['tels']);
			$mailvar = ($_POST['mail']);
			$comentariovar = ($_POST['comentario_s']);

			$itipovar = ($_POST['itipo']);
			$icolvar = ($_POST['icol']);
			$icallevar = ($_POST['icalle']);
			$inumexvar = ($_POST['inumex']);
			$inumintvar = ($_POST['inumint']);
			$iedovar = ($_POST['iedo']);
			$imunvar = ($_POST['imun']);
			$ialfavar = ($_POST['ialfa']);
			$ipreciovar = ($_POST['iprecio']);
			$iurlvar = ($_POST['iurl']);

			$message ="Nombre: " . $nombrevar . "\r\n";
			$message .="Teléfono: " . $telsvar . "\r\n";
			$message .="E-Mail: " . $mailvar . "\r\n";
			$message .="Mensaje: \r\n";
			$message .= $comentariovar . "\r\n";

			$message .="Detalle Propiedad: \r\n";
			$message .="Tipo: " . $itipovar . "\r\n";
			$message .="Col: " . $icolvar . "\r\n";
			$message .="Calle: " . $icallevar . "\r\n";
			$message .="No Ext: " . $inumexvar . "\r\n";
			$message .="No Int: " . $inumintvar . "\r\n";
			$message .="Edo: " . $iedovar . "\r\n";
			$message .="Mun: " . $imunvar . "\r\n";
			$message .="Alfaclave: " . $ialfavar . "\r\n";
			$message .="Precio: " . $ipreciovar . "\r\n";

			$this->email->message($message);

			$this->email->send();

			$contenido=$this->load->view('t_detalle',$maestro, true);
			$banner=$this->load->view('banner',$maestro, true);
			$this->load->view('template',array("contenido"=>$contenido, "banner"=>$banner));

			}
	}
}