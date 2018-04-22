<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
        
	public function login()
	{
                redirect('dashboard2');
	}
        
        public function logout()
	{
        $this->load->view('login');
	}
}
