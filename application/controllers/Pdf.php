<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pdf extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('pdflibrary');
        $this->load->model('user_model');
        $this->load->model('cart_model');
        $this->load->model('gate_model');
    }
    
    public function index(){
        $this->load->view('pdf/view_pdf');
       
    }

    
    // public function view_pdf($cart_id) {
       
    // }

}
?>