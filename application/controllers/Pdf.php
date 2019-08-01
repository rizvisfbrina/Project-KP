<?php
Class Pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdflibrary');
        $this->load->model('user_model');
		$this->load->model('cart_model');
		$this->load->model('gate_model');
    }
    
    function index(){
        $this->gate_model->user_gate();
    }

    public function your_order() {
        $orders = $this->cart_model->getAllUserOrders()->result();
        foreach($orders as $order) {
            $order->totalPrice = $this->cart_model->getTotalCartPrice($order->cart_id);
        }
        $data["orders"] = $orders;
        $this->load->view('layout/user/header', array("title" => "Manage Orders"));
        $this->loadUserSidebar('show_cart_order', 'your_order_active');
        $this->load->view("user/manage_order", $data);
        $this->load->view('layout/dashboard/logout');
        $this->load->view('layout/user/footer');
    }

    public function pdfview($cartid){
        $this->gate_model->user_gate();
        $status = $this->cart_model->userCartChecking($cartid);
			if (!$status) {
				$message = '<div class="alert alert-danger" style="margin-top:10px" role="alert">You are not allowed to access this page. </div>';
				$this->session->set_flashdata('message', $message);
				redirect('pdf/your_order');
			} else {
                $cartData = $data['cartData'] = $this->cart_model->getProductsInCart($cartid);
                $data['totalPrice1'] = 0;
				$data['totalTax'] = 0;
				$data['totalPrice'] = 0;
                foreach($cartData as $cart) {
                    $data['totalPrice1'] += $cart->price * $cart->quantity;
					$data['totalTax'] = (0.1 * $data['totalPrice1']);
					$data['totalPrice'] =  ($data['totalTax'] + $data['totalPrice1']);
                }
                $this->load->view('pdf/pdfview', $data);
            }
    }
}
?>
