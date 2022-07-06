<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/frontend/header');
		$this->load->view('frontend/index');
		$this->load->view('templates/frontend/footer');

		$this->load->helper('url');
	}
}
