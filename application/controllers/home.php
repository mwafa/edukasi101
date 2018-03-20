<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		header("location: /login");
		$this->load->view('welcome_message');
	}
}
