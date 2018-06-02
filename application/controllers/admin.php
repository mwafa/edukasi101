<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
        $this->dashboard();
    }
    public function dashboard()
    {
        
        $data['pages']  = array('admin','dashboard');
        
        $this->load->view('admin/header',$data);
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/footer',$data);
        
    }
    public function profile()
    {
        
        $data['pages']  = array('admin','profile');
    
        $this->load->view('admin/header',$data);
        $this->load->view('admin/profile',$data);
        $this->load->view('admin/footer',$data);
        
    }
    public function siswa()
    {
        
        $data['pages']  = array('admin','siswa');
        
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_data',$data);
        $this->load->view('admin/data',$data);
        $data['costum_js']  =   $this->load->view('admin/data_js','',true);
        $data['costum_js'] .=   $this->load->view('admin/input_data_js','',true);
        $this->load->view('admin/footer',$data);
    }

    public function absensi()
    {
        $data['pages'] = array('admin','absensi');
        $data['costum_js'] = $this->load->view('admin/data_js','', true);
        

        $this->load->view('admin/header', $data, FALSE);
        $this->load->view('admin/data', $data, FALSE);
        $this->load->view('admin/footer', $data, FALSE);
        
    }
}
