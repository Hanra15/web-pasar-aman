<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/backend/header');
		$this->load->view('templates/backend/sidebar');
		$this->load->view('backend/index');
		$this->load->view('templates/backend/footer');

		$this->load->helper('url');
	}
}
