<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{

			$this->load->model('qualitymaestro');
			$maestro=$this->qualitymaestro->offices();

	        // Añadimos las reglas de validacion
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('names', 'Nombre', 'required|min_length[5]');
			$this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('lada', 'Lada', 'required');
			$this->form_validation->set_rules('tels', 'Teléfono', 'required');
			$this->form_validation->set_rules('cd', 'Ciudad');
			$this->form_validation->set_rules('edo', 'Estado');
			$this->form_validation->set_rules('emailcontacto', 'Franquicia');
			$this->form_validation->set_rules('franquicianombre', 'Franquicia Nombre');


			if ($this->form_validation->run() == FALSE)
			{
				$contenido=$this->load->view('t_contacto',$maestro, true);
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
			$this->email->subject('Contacto | ' . $franquicianombrevar);

			$nombrevar = ($_POST['names']);
			$mailvar = ($_POST['mail']);
			$ladavar = ($_POST['lada']);
			$telsvar = ($_POST['tels']);
			$cdvar = ($_POST['cd']);
			$edovar = ($_POST['edo']);
			$comentariovar = ($_POST['comentario_s']);

			$message ="Nombre: " . $nombrevar . "\r\n";
			$message .="E-Mail: " . $mailvar . "\r\n";
			$message .="Lada: " . $ladavar . "\r\n";
			$message .="Teléfono: " . $telsvar . "\r\n";
			$message .="Ciudad: " . $cdvar . "\r\n";
			$message .="Estado: " . $edovar . "\r\n";
			$message .="Mensaje: \r\n";
			$message .= $comentariovar . "\r\n";
			$this->email->message($message);

			$this->email->send();

		    $contenido=$this->load->view('t_contactoe',$maestro, true);
			$banner=$this->load->view('banner',$maestro, true);
			$this->load->view('template',array("contenido"=>$contenido, "banner"=>$banner));

			}
	}
}