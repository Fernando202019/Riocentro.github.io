<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales extends CI_Controller {


	

	public function local()
	{
		$this->load->view('Encabezado');
		$this->load->view('locales/local');
		$this->load->view('pie');
	}
}
