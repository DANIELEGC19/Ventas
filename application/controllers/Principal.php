<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {


	public function index(){
    $data['titulo'] = ' Pagina Principal';

		$this->load->view('Plantilla/Header',$data);
		$this->load->view('principal');
		$this->load->view('Plantilla/Footer');
	}
}
