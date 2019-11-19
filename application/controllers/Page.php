<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
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
    

    public function detail($id=null)
    {
    	if (!isset($id)) {
    		redirect();
    	}else{
    		$detail=$this->mdestinasi->getDetail(array('id_destinasi'=>$id))->result_array();
	        $data = array(
				'pageTitle' 	=> 'APP - Smartgoverment',
				'detail' 	=> $detail,
			);
	        $this->_render_page('users/detail', $data);
    	}        
    }
    public function buy($id=null)
    {
    	if (!isset($id)) {
    		redirect();
    	}else{
    		$detail=$this->mdestinasi->getDetail(array('id_destinasi'=>$id))->result_array();
	        $data = array(
				'pageTitle' 	=> 'APP - Smartgoverment',
				'detail' 	=> $detail,
			);
	        $this->_render_page('users/detail', $data);
    	}	
    }
}
