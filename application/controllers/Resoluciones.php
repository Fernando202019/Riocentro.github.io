<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resoluciones extends CI_Controller {


	

	public function resol()
	{
		$this->load->view('Encabezado');
		$this->load->view('resoluciones/resol');
		$this->load->view('pie');
	}
}
