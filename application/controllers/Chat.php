<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHAT extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('chat_model');
		$this->load->model('gate_model');
		$this->load->model('user_model');
		$this->load->model('admin_model');
	}


	public function index()
	{
		// if(!$this->session->userdata("loggin")){
		// 	redirect("index.php/welcome/login","refresh");
		// }
		// $this->load->model("model_user");
		
		// $data['user']	= $this->model_user->getAll(array("id_user !=" => $this->session->userdata('id')));

		if ($this->session->userdata('usertype') != 'user' && $this->session->userdata('usertype') != 'admin') {
	        redirect('Account');
    	} 

		$this->load->view('chat/welcome_chat',$data);
	}
	
	// function login(){
	// 	if($this->session->userdata("loggin")){
	// 		redirect("index.php/welcome","refresh");
	// 	}
	// 	$this->load->model("model_user");
	// 	$data['user']	= $this->model_user->getAll(array("id_user !=" => $this->session->userdata('id')));
	// 	$this->load->view("vwLogin",$data);
	// }

	public function getUserAll(){
		if ($this->session->userdata('usertype') = 'user') {
	// 	// 	// $data['user']	= $this->admin_model->get_users(array("user_type" => $admin))->row_array();

			// $data['user']	= $this->user_model->getAdmin(array("user_type" =>$admin))->row_array();

			$data['user'] = $this->user_model->getAdmin();
	        
    	}
    	else ($this->session->userdata('usertype') = 'admin'){
 //   //  		// $data['user']	= $this->admin_model->get_users(array(userdata('usertype')='user'));

    		$data['user']	= $this->admin_model->get_users();


	// 		// $data['user']	= $this->model_user->getAll(array("id_user =" => $this->session->userdata('usertype')='user'));
    	}

	}
	
	public function getChat(){

		$id_user	= $this->input->post("id_user",true); //tujuan
		$id			= $this->session->userdata('id'); //dari
		$id_max		= $this->input->post('id_max'); //dari

		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
		$chat	= $this->chat_model->getAll($where);
		$data['id_max']		= $id_max;
		$data['id_user']	= $id_user;
		$data['chat'] 		= $chat;

		// $this->load->view('user/welcome_chat',$data);
		$this->load->view("user/chatbox",$data);
	}
	
	public function getChatAll(){
		
		$id_user	= $this->input->post("id_user",true); //tujuan
		$id			= $this->session->userdata('id'); //dari
		$id_max		= $this->input->post('id_max'); //dari

		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')))";
		$chat	= $this->chat_model->getAll($where);
		
		$where2	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
		$get_id = $this->chat_model->getLastId($where2);
		
		$data['id_max']		= $get_id['id_chat'];
		$data['id_user']	= $id_user;
		$data['chat'] 		= $chat;

		// $this->load->view('user/welcome_chat',$data);
		$this->load->view("user/chatbox",$data);
	}
	
	public function getLastId(){
		
		$id_user	= $this->input->post("id_user",true); //tujuan
		$id			= $this->session->userdata('id'); //dari
		$id_max		= $this->input->post('id_max'); //dari
		
		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
		$get_id = $this->chat_model->getLastId($where);
		
		echo json_encode(array("id" => $get_id['id_chat'] != '' ?  $get_id['id_chat'] : $id_max ));
	}

	public function sendMessage(){

		$id_user	= $this->input->post("id_user",true); //tujuan/user_2
		$id			= $this->session->userdata('id'); //dari/user_1
		$pesan		= addslashes($this->input->post("pesan",true));
		
		$data	= array(
			'user_1' => $id,
			'user_2' => $id_user,
			'pesan' => $pesan,
		);
		
		$query	=	$this->chat_model->getInsert($data);
		
		if($query){
			$rs = 1;
		}else{
			$rs	= 2;
		}
		
		echo json_encode(array("result"=>$rs));
	
	}
	
	// function masuk(){
	// 	$this->load->model("model_user");
		
	// 	$id		= $this->input->post("id_user",true);
	// 	$data	= $this->model_user->getAll(array("id_user" => $id))->row_array();
		
	// 	$session = array("id" => $id, "nama" => $data['nama'], "loggin" => true);
	// 	$this->session->set_userdata($session);
	// 	redirect("index.php/welcome","refresh");
	// }
	
	// function keluar(){
	// 	session_destroy();
	// 	redirect("index.php/welcome/login");
	// }
}

?>
