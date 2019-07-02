<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('account_model');
	}

	/**
        Login Page
    **/
	public function index() {
		$this->load->view('layout/account/header', array("title" => "Login"));
		$this->load->view('account/login');
		$this->load->view('layout/account/footer');
	}

	/**
        Registration Page
    **/
	public function register() {
		$this->load->view('layout/account/header', array("title" => "Register Account"));
		$this->load->view('account/register');
		$this->load->view('layout/account/footer');
	}

	/**
		Registration
		Form validation is done here
		password hashing is done here
		redirect to login page if successful
		redirect to registeration page if unsuccessful
    **/
	public function registerAccount() {
		$this->form_validation->set_rules(
			'FName', 'Nama Depan',
			'trim|required|min_length[5]|max_length[20]|alpha',
			array(
				'required' => 'Anda belum mengisi %s.',
				'min_length' => ' {field} berisi minimal sebanyak {param} karakter.',
				'max_length' => ' {field} berisi maksimal sebanyak {param} karakter.',
				'alpha' => 'Anda hanya boleh menggunakan huruf untuk pengisian {field}'
			)
		);

		$this->form_validation->set_rules(
			'LName', 'Nama Belakang',
			'trim|required|min_length[5]|max_length[20]|alpha',
			array(
				'required' => 'Anda belum mengisi %s.',
				'min_length' => '{field} berisi minimal sebanyak {param} karakter.',
				'max_length' => '{field} berisi maksimal sebanyak {param} karakter.',
				'alpha' => 'Anda hanya boleh menggunakan huruf untuk pengisian {field}'
			)
		);

		$this->form_validation->set_rules(
			'PName', 'Nama Perusahaan',
			'trim|required|min_length[5]|max_length[20]',
			array(
				'required' => 'Anda belum mengisi %s.',
				'min_length' => '{field} berisi minimal sebanyak {param} karakter.',
				'max_length' => '{field} berisi maksimal sebanyak {param} karakter.'
			)
		);
	
		$this->form_validation->set_rules('email', 'Email Perusahaan', 'trim|required|is_unique[user_table.email]|valid_email', 
			array(
			'required' => 'Anda belum mengisi %s.',
			'is_unique' => ' %s ini telah digunakan.',
			'valid_email' => 'Alamat email tidak valid!'
			)
		);

		$this->form_validation->set_rules(
			'username', 'Username',
			'trim|required|min_length[5]|max_length[12]|is_unique[user_table.username]',
			array(
				'required' => 'Anda belum mengisi %s.',
				'is_unique' => ' %s telah digunakan.'
			)
		);

		$this->form_validation->set_rules('password', 'Password', 'trim|required',
			array(
				'required' => 'Anda harus mengisi %s.'
			)
		);

		$this->form_validation->set_rules('confPassword', 'Konfirmasi Password', 'trim|required|matches[password]',
			array('required' => 'Anda harus mengisi %s.')
		);

		if ($this->form_validation->run() == FALSE) {
			$this->register();
		} else {
			$username = $this->input->post('username', TRUE);
			$email = $this->input->post('email', TRUE);
			$FName = $this->input->post('FName', TRUE);
			$LName = $this->input->post('LName', TRUE);
			$PName = $this->input->post('PName', TRUE);
			$password = $this->input->post('password', TRUE);
			$confPassword = $this->input->post('confPassword', TRUE);

			$array = array(
				"first_name" => $FName,
				"last_name" => $LName,
				"username" => $username,
				"email" => $email,
				"perusahaan_name" => $PName,
				"password" => password_hash($password, PASSWORD_DEFAULT),
				"user_type" => "user"
			);

			if ($this->account_model->register($array)){
				$this->session->set_flashdata('fail', '<div class="alert alert-success" style="margin-top:10px" role="alert"> Registrasi berhasil!</div>'); 
				redirect('account');
			} else {
				$this->session->set_flashdata('register', '<div class="alert alert-danger" style="margin-top:10px" role="alert">Gagal registrasi!</div>'); 
				redirect('account/register');
			}
		}
	}

	/**
		Signing In
		Checking user type to redirect different dashboards
    **/
	public function loggingIn() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$data = array(
				"username" => $username,
				"password" => $password
			);
		$result = $this->account_model->login($data);
		if ($result == "user") {
			$this->session->set_flashdata('success', '<div class="alert alert-primary mt-4"role="alert">
  				Anda berhasil masuk sebagai <span href="#" class="alert-link">'.$username.'</span>. </div>'); 
			redirect('shop');
		} else if ($result == "admin") {
			$this->session->set_flashdata('success', '<div class="alert alert-primary mt-4" role="alert">
  				Anda berhasil masuk sebagai <span href="#" class="alert-link">'.$username.'</span>. Anda adalah admin.</div>'); 
			redirect('Admin');
		} else if ($result == "ban") {
			$this->session->set_flashdata('success', '<div class="alert alert-danger mt-4" role="alert">
  				Anda tidak dapat mengakses website ini!</div>'); 
			redirect('shop');
		} else {
			$this->session->set_flashdata('fail', '<div class="alert alert-danger mt-4" role="alert">
  				Gagal masuk!</div>'); 
			redirect('account');
		}
	}

	/**
        Sign out
    **/
	public function logout()
	{
		$array_items = array('username', 'usertype');
		$this->session->unset_userdata($array_items);
		redirect('shop');
	}
}