<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		// if(!$this->session->userdata('isLoggedIn')){
		// 	redirect(base_url('adminlsp/login'),'refresh');
	 //    }	
        $this->load->model('mdestinasi');
    }
	
	private function _render_page($view, $data = null)
	{
		$this->viewdata = (empty($data)) ? $this->data : $data;
		
		$this->load->view('theme/head-src', $this->viewdata);
		$this->load->view('theme/header', $this->viewdata);
		$this->load->view($view, $this->viewdata);
		$this->load->view('theme/footer', $this->viewdata);
	}
    

    public function index()
    {
        $destinasi=$this->mdestinasi->getData()->result_array();
        $data = array(
			'pageTitle' 	=> 'APP - Smartgoverment',
			'destinasi' 	=> $destinasi,
		);
        $this->_render_page('users/home', $data);
    }
}
