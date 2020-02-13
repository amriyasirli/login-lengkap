<?php


class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('template_web/header');
		$this->load->view('template_web/topbar');
		$this->load->view('welcome');
		$this->load->view('template_web/footer');
		
	}
}
