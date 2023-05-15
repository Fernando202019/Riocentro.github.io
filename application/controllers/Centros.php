<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centros extends CI_Controller {


	

	public function centro()
	{
		$this->load->view('Encabezado');
		$this->load->view('centros/centro');
		$this->load->view('pie');
	}
}
