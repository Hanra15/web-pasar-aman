<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function index()
	{
		$title = 'Galeri Pasar Aman';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/galeri',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
