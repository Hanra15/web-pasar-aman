<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BahanBerbahaya extends CI_Controller {
	public function index()
	{
		$title = 'Bahan Berbahaya';
		//add more function
		
		$data = [
			'title' => $title,
		];
		$this->load->view('templates/frontend/header',$data);
		$this->load->view('frontend/bahanberbahaya',$data);
		$this->load->view('templates/frontend/footer',$data);

		$this->load->helper('url');
	}
}
