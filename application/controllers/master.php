<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {




	public function index()
	{

			if ($this->session->userdata('username') === NULL)
			{
			    $this->load->view('admin/login/login');
			}
			else
			{
			    $this->load->view('admin/inc/header');
				$this->load->view('admin/inc/sidebar');
				$this->load->view('master');
			}

	}
}