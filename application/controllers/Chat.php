<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
        
    class Chat extends CI_Controller {
            
        function __construct() {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->model('gate_model');
            $this->load->model('Chat_model');
        }
            
        public function index(){
            // $this->gate_model->user_gate();
            // $this->load->view('layout/user/header');
            // $this->loadUserSidebar('show_cart_order', 'your_cart_active');
            $this->load->view('user/chat');
            // $this->load->view('layout/dashboard/logout');
            // $this->load->view('layout/account/footer');
        }

        public function send_message()
        {
            $message = $this->input->get('message', null);
            $nickname = $this->input->get('nickname', '');
            $guid = $this->input->get('guid', '');
            
            $this->Chat_model->add_message($message, $nickname, $guid);
            
            $this->_setOutput($message);
        }
        
        
        public function get_messages()
        {
            $timestamp = $this->input->get('timestamp', null);
            
            $messages = $this->Chat_model->get_messages($timestamp);
            
            $this->_setOutput($messages);
        }
        
        
        private function _setOutput($data)
        {
            header('Cache-Control: no-cache, must-revalidate');
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header('Content-type: application/json');
            
            echo json_encode($data);
        }
    }
?>