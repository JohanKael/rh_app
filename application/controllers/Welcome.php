<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller  {

	public function index()
	{
		$this->load->model('Admin/allModel');
		$data['sex'] = $this->allModel->get_sex();
		$data['nationalites'] = $this->allModel->get_nationalites();
		$data['diplomes'] = $this->allModel->get_diplomes();
		$data['situations_matrimoniales'] = $this->allModel->get_situations_matrimoniales();
		
		$this->load->view('header');
		$this->load->view('besoin',$data);
		$this->load->view('footer');
	}		
}
