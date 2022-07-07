<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedoman extends CI_Controller {
	public function index()
	{
		$title = 'Pedoman';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/pedoman',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
