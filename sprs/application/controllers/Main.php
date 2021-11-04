<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	
	// public function index()
	// {
	// 	redirect(base_url().'../sprs/');
	// }


/*
	public function index()
	{
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/landing');
		$this->load->view('temp/footer');
	}
*/
	public function index()
	{
			$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/landing');
		$this->load->view('temp/footer');
	}

	public function demo_about()
	{
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/about');
		$this->load->view('temp/footer');
	}

	public function about()
	{
		//$this->load->view('temp/header_oth');
		$this->load->view('pages/about');
		$this->load->view('temp/footer');
	}

	public function privacy()
	{
		//$this->load->view('temp/header_oth');
		$this->load->view('pages/privacy');
		$this->load->view('temp/footer');
	}

	public function contact()
	{
		//$this->load->view('temp/header_oth');
		$this->load->view('pages/contact');
		$this->load->view('temp/footer');
	}

	public function service()
	{
		//$this->load->view('temp/header_oth');
		$this->load->view('pages/service');
		$this->load->view('temp/footer');
	}

	public function wintest()
	{
		//$this->load->view('temp/header_oth');
		$this->load->view('welcome_message');
		//$this->load->view('temp/footer');
	}
}