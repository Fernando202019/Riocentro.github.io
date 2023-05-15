<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horarios extends CI_Controller {


	

	public function hora()
	{
		$this->load->view('Encabezado');
		$this->load->view('horarios/hora');
		$this->load->view('pie');
	}
}
