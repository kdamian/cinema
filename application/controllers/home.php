<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index() {
		$this->load->model('HomeModel');
		$data['cities'] = $this->HomeModel->getCities();
		//print_r($this->HomeModel->getCities());
		$this->load->view('header');
		$this->load->view('home/index', $data);
		$this->load->view('footer');
	}

}