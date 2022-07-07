<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {
	public function index()
	{
		$title = 'Program';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/program',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
