<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function index()
	{
		$title = 'Berita Terkini';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/berita',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
