<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function loginsipaman()
	{
		$this->load->view('backend/login/templates/header');
		$this->load->view('backend/login/loginsipaman');
		$this->load->view('backend/login/templates/footer');

		$this->load->helper('url');
	}
	public function loginfasilitator()
	{
		$this->load->view('backend/login/templates/header');
		$this->load->view('backend/login/loginfasilitator');
		$this->load->view('backend/login/templates/footer');

		$this->load->helper('url');
	}
}
