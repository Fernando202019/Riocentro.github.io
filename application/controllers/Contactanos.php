<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactanos extends CI_Controller {


	

	public function contact()
	{
		$this->load->view('Encabezado');
		$this->load->view('Contactanos/contact');
		$this->load->view('pie');
	}
}
