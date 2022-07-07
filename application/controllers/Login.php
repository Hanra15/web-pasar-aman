<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function loginsipaman()
	{
		$title = 'Login SIPAMAN';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('backend/login/templates/header',$data);
		$this->load->view('backend/login/loginsipaman',$data);
		$this->load->view('backend/login/templates/footer',$data);

		$this->load->helper('url');
	}
	public function loginfasilitator()
	{
		$title = 'Login Fasilitator';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('backend/login/templates/header',$data);
		$this->load->view('backend/login/loginfasilitator',$data);
		$this->load->view('backend/login/templates/footer',$data);

		$this->load->helper('url');
	}
}
