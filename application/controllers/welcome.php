<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('view_homepage');
	}
	
	public function stories()
	{
		$this->load->view('view_stories');
	}
	
	public function donate()
	{
		$this->load->view('view_donate');
	}
	
	public function about()
	{
		$this->load->view('view_about');
	}
	
	public function impact()
	{
		$this->load->view('view_impact');
	}


}