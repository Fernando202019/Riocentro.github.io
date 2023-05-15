<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {


	

	public function event()
	{
		$this->load->view('Encabezado');
		$this->load->view('eventos/event');
		$this->load->view('pie');
	}
}
