<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasarAman extends CI_Controller {
	public function index()
	{
		$title = 'Pasar Aman Dari Bahan Berbahaya';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/pasaraman',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
