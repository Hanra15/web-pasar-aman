<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {
	public function index()
	{
		$title = 'Media Promosi';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/promosi',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
