<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		redirect(base_url('/login'),'refresh');
		
	}
}
