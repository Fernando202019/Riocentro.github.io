<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	

	public function index()
	{
		$this->load->view('Encabezado');
		$this->load->view('welcome_message');
		$this->load->view('pie');
	}
}
