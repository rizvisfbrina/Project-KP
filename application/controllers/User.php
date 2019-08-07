<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User extends My_Controller
	{
		public function __construct() {
			parent::__construct();
			$this->load->model('user_model');
			$this->load->model('cart_model');
			$this->load->model('gate_model');
			$this->load->model('admin_model');
			$this->load->model('Chat_model');
			// $this->load->helper("form");
		}

		public function index() {
			$this->gate_model->user_gate();
			$this->load->view('layout/user/header');
			$this->load->view('user/login');
			$this->load->view('layout/account/footer');
		}
		
		public function dashboard() {
			$this->gate_model->user_gate();
			$this->load->view('layout/user/header', array('title' => 'User Dashboard'));
			$this->loadUserSidebar(null, null);
			$this->gate_model->user_gate();
			$this->load->view('user/dashboard');
			$this->load->view('layout/dashboard/logout');
			$this->load->view('layout/user/footer');
		}
		
		public function change_details() {		
			$this->gate_model->user_gate();
			$data['userData']= $this->user_model->get_userdetail()->row();
			$this->load->view('layout/user/header', array('title' => 'Change Details'));
			$this->loadUserSidebar('show_profile', 'change_detail_active');
			$this->load->view('user/change_details', $data);
			$this->load->view('layout/dashboard/logout');
			$this->load->view('layout/user/footer');
		}
		
		public function change_userdetail() {
			$this->gate_model->user_gate();
			$user = $this->user_model->get_userdetail()->row();
			$this->form_validation->set_rules(
				'fname', 'First Name',
				'trim|required|min_length[5]|max_length[20]|alpha',
				array(
					'required' => 'Anda belum mengisi %s.',
					'min_length' => ' {field} harus berisi setidaknya {param} karakter.',
					'max_length' => ' {field} berisi maksimal {param} karakter.',
					'alpha' => ' {field} hanya boleh berisi huruf.'
				)
			);
	
			$this->form_validation->set_rules(
				'lname', 'Last Name',
				'trim|required|min_length[5]|max_length[20]|alpha',
				array(
					'required' => 'Anda belum mengisi %s.',
					'min_length' => '{field} harus berisi setidaknya {param} karakter.',
					'max_length' => '{field} berisi maksimal {param} karakter.',
					'alpha' => '{field} hanya boleh berisi huruf.'
				)
			);

			if ($user->username == $this->input->post('username')) {
				$uniqueUsername = '';
			} else {
				$uniqueUsername = '|is_unique[user_table.username]';
			}
			
			$this->form_validation->set_rules(
				'username', 'Username',
				'required|min_length[5]|max_length[12]'.$uniqueUsername,
				array(
					'required' => 'Anda belum mengisi %s.',
					'is_unique' => ' %s telah dipakai.'
				)
			);
				
			if ($user->email == $this->input->post('email')) {
				$unique = '';
			} else {
				$unique = '|is_unique[user_table.email]';
			}
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'.$unique, 
				array(
					'required' => 'Anda belum mengisi %s.',
					'is_unique' => ' %s telah dipakai.',
					'valid_email' => 'Email tidak valid.'
				)
			);
			
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('msg', validation_errors()); 
				redirect(site_url('user/change_details'));
			} else {
				$data['first_name'] = $this->input->post('fname');
				$data['last_name'] 	= $this->input->post('lname');
				$data['username'] 	= $this->input->post('username');
				$data['email'] 		= $this->input->post('email');
				$message = '<div class="alert alert-primary" style="margin-top:10px" role="alert">Detail akun berhasil diubah.</div>';
				$this->session->set_flashdata('msg', $message); 
				$this->user_model->update_userdetail($this->session->userdata('userid'), $data);
				redirect(site_url('user/change_details'));
			}
		}
		
		public function change_password() {
			$this->gate_model->user_gate();
			$data['userData']	=	$this->user_model->get_userdetail()->row();
			$this->load->view('layout/user/header', array('title' => 'Change Password'));
			$this->loadUserSidebar('show_profile', 'change_password_active');
			$this->load->view('user/change_password', $data);
			$this->load->view('layout/dashboard/logout');
			$this->load->view('layout/user/footer');
		}
		
		public function change_userpassword() {
			$this->gate_model->user_gate();
			$data['oldpassword']	=	$this->input->post('oldpassword');
			$data['newpassword']	=	$this->input->post('newpassword');
			$data['renewpassword']	=	$this->input->post('renewpassword');
			$this->user_model->change_userpassword($data);
		}
		
		public function your_cart() {
			$this->gate_model->user_gate();
			$cartExist = $this->cart_model->hasActiveCart();
			if ($cartExist) {
				$cartid = $this->cart_model->getUserActiveCartID();
				$cartData = $data['cartData'] = $this->cart_model->getProductsInCart($cartid);
				$data['totalPrice1'] = 0;
				$data['totalTax'] = 0;
				$data['totalPrice'] = 0;
			

				foreach($cartData as $cart) {
					$data['totalPrice1'] += $cart->price * $cart->quantity;
					$data['totalTax'] = (0.1 * $data['totalPrice1']);
					$data['totalPrice'] =  ($data['totalTax'] + $data['totalPrice1']);

				}

			}
			$data['exist'] = $cartExist;
			$this->load->view('layout/user/header', array('title' => 'Your Cart'));
			$this->loadUserSidebar('show_cart_order', 'your_cart_active');
			$this->load->view('user/manage_cart', $data);
			$this->load->view('layout/dashboard/logout');
			$this->load->view('layout/user/cart_modal');
			$this->load->view('layout/user/footer');
		}
		
		public function checkout() {
			$this->gate_model->user_gate();
			$cartid = $this->cart_model->getUserActiveCartID();
			$cartData = $data['cartData'] = $this->cart_model->getProductsInCart($cartid);
			if (count($cartData) == 0) {
				$message = '<div class="alert alert-danger" style="margin-top:10px" role="alert"> Keranjang Anda kosong! </div>'; 
				$this->session->set_flashdata('msg', $message);
				redirect('user/your_cart');
			} else {

				$data['totalPrice1'] = 0;
				$data['totalTax'] = 0;
				$data['totalPrice'] = 0;
			

				foreach($cartData as $cart) {
					$data['totalPrice1'] += $cart->price * $cart->quantity;
					$data['totalTax'] = (0.1 * $data['totalPrice1']);
					$data['totalPrice'] =  ($data['totalTax'] + $data['totalPrice1']);
				}
				
				$data['user'] = $this->user_model->get_userdetail($this->session->userdata('userid'))->row();
				$shipping = $data['shipping_address'] = $this->user_model->get_shipping_address($this->session->userdata('userid'))->row_array();
				if (count($shipping) == 0) {
					$data['shipping_address'] = array(
						"address_id" => "",
						"user_id" => "",
						"province" => "",
						"postcode" => "",
						"address" => "",
						"town" => "",
					);
				}
		
				$this->load->view('layout/user/header', array('title' => 'Checkout'));
				$this->loadUserSidebar('show_cart_order', 'your_cart_active');
				$this->load->view('user/checkout', $data);
				$this->load->view('layout/dashboard/logout');
				$this->load->view('layout/user/footer');
			}
			
		}
		

		// public function chat() {
		// 	$this->gate_model->user_gate();
		// 	$this->load->view('layout/user/header');
		// 	$this->loadUserSidebar('show_cart_order', 'your_cart_active');
		// 	$this->load->view('user/chat', $data);
		// 	$this->load->view('layout/dashboard/logout');
		// 	$this->load->view('layout/account/footer');
		// }

		
		public function your_order() {
			// $userId = $_GET['userId'];
			// $approve = $this->admin_model->approveContract($userId);
			// $disapproved = $this->admin_model->disapprovedContract($userId);
			// if($approve){
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
			// }else if($disapproved){
			// 	$message = '<div class="alert alert-danger" style="margin-top:10px" role="alert">Waiting for contract to approve by Admin </div>';
			// 	$this->session->set_flashdata('message', $message);
			// 	redirect('user/your_order');
			// }
		}
		
		public function view_order($cartid) {
			$this->gate_model->user_gate();
			$status = $this->cart_model->userCartChecking($cartid);
			if (!$status) {
				$message = '<div class="alert alert-danger" style="margin-top:10px" role="alert">You are not allowed to access this page. </div>';
				$this->session->set_flashdata('message', $message);
				redirect('user/your_order');
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
				$this->load->view('layout/user/header', array('title' => 'Your Cart'));
				$this->loadUserSidebar('show_cart_order', 'your_order_active');
				$this->load->view('user/view_order', $data);
				$this->load->view('layout/dashboard/logout');
				$this->load->view('layout/user/cart_modal');
				$this->load->view('layout/user/footer');

			}
			
		}
		
	}
	?>