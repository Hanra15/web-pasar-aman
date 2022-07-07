<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
		$title = 'Kontak Kami';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/kontak',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
