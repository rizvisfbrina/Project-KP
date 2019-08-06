<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		// $this->load->helper('download');				
	}

	public function index(){		
		// redirect('user/view_order');
		$this->load->view('user/view_order');
	}

	public function download(){	
		

		 $this->load->helper('download'); 
		 
		 $data = file_get_contents('uploads/tes.pdf'); 
		 $name = 'tes.pdf';
		 force_download($name,$data);
		 // redirect( base_url() );
		 redirect(current_url(), "refresh"); 
	}

}