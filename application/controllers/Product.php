<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends My_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('category_model');
		$this->load->model('product_model');
		$this->session->keep_flashdata('msg');
	}

	public function getAllProduct() {
		$this->gate_model->ajax_gate();
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode($this->db->get('product_table')->result());
	}

	public function searchActiveProduct() {
		// $this->gate_model->ajax_gate();
		$search = $_GET['search'];
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode($this->product_model->searchActiveProduct($search)->result());
	}

	public function searchProduct() {
		$this->gate_model->ajax_gate();
		$search = $_GET['search'];
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode($this->product_model->searchProduct($search)->result());
	}
	
	public function selectProductCategory() {
		// $this->gate_model->ajax_gate();
		$categoryID = $_GET['categoryID'];
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode($this->product_model->getActiveCategoryProduct($categoryID)->result());
	}
	
	public function getProductDataJSON($productId) {
		$this->gate_model->ajax_gate();
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode($this->product_model->getProduct($productId)->result());
	}
	
	public function update($product_id) {
		$this->form_validation->set_rules(
			'product_name', 'Nama Jasa',
			'required|min_length[10]',
			array(
				'required' => '<div class="alert alert-danger">Anda belum mengisi %s.</div>',
				'min_length' => '<div class="alert alert-danger"> {field} harus berisi minimal sebanyak {param} karakter.</div>'
			)
		);
	
		$this->form_validation->set_rules(
			'product_price', 'Nilai', 'required|decimal', 
			array(
				'required' => '<div class="alert alert-danger">Anda belum mengisi %s.</div>',
				'decimal' => '<div class="alert alert-danger"> {field} harus berisi angka.</div>'
			)
		);
	
		$this->form_validation->set_rules(
			'product_description', 'Deskripsi Detail', 'required|min_length[10]',
			array(
				'required' => '<div class="alert alert-danger">Anda belum mengisi %s.</div>',
				'min_length' => '<div class="alert alert-danger"> {field} harus berisi minimal sebanyak {param} karakter.</div>'
				)
		);
	
		$this->form_validation->set_rules(
			'product_short_description', 'Deskripsi Singkat', 
			'required|min_length[10]|max_length[500]',
			array(
				'required' => '<div class="alert alert-danger">Anda harus mengisi %s.</div>',
				'min_length' => '<div class="alert alert-danger"> {field} harus berisi minimal sebanyak {param} karakter.</div>',
				'max_length' => '<div class="alert alert-danger"> {field} harus berisi maksimal sebanyak {param} karakter.</div>'
			)
		);

		if ($this->form_validation->run() == FALSE) {
			// print_r(validation_errors());
			$this->session->set_flashdata('errors', validation_errors());
			redirect('admin/edit_product/'.$product_id);
		} else {
			$product_name = $data["product_name"] = $this->input->post('product_name');
			$data["price"] = $this->input->post('product_price');
			$data["description"] = $this->input->post('product_description');
			$data["short_desc"] = $this->input->post('product_short_description');
			$data["category_id"] = $this->input->post('product_category');

			// upload images
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 1000;
			$config['max_width']            = 1000000;
			$config['max_height']           = 1000000;

			$this->load->library('upload', $config);

			$upload = $this->upload->do_upload('image_link');
			if ( !$upload && !$this->product_model->getProductImageId($product_id)) {
				$error = $this->upload->display_errors();
				$message = "<div class='alert alert-danger alert-dismissable'>";
				$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
				$message .= "<strong>Gagal!</strong> $error";
				$message .= "</div>";
				// print_r($error);
				$this->session->set_flashdata('errors', $message);
				redirect('admin/edit_product/'.$product_id);
			} elseif(!$upload && count($this->product_model->getProductImageId($product_id)) > 0) {
				$update = $this->product_model->updateProduct($product_id, $data);
				if ($update) {
					$message = "<div class='alert alert-success alert-dismissable'>";
					$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$message .= "<strong>Berhasil!</strong> $product_name berhasil diubah!";
					$message .= "</div>";
				} else {
					$message = "<div class='alert alert-danger alert-dismissable'>";
					$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$message .= "<strong>Gagal!</strong> $product_name tidak berhasil diubah!";
					$message .= "</div>";
				}
				$this->session->set_flashdata('msg', $message); 
				redirect('admin/view_product');
			} elseif ($upload) {
				$file = $this->upload->data();
				$image_link = "uploads/".$file['file_name'];
				$update = $this->product_model->updateProductWithProductImage($product_id, $data, $image_link);
				if ($update) {
					$message = "<div class='alert alert-success alert-dismissable'>";
					$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$message .= "<strong>Berhasil!</strong> $product_name berhasil diubah!";
					$message .= "</div>";
				} else {
					$message = "<div class='alert alert-danger alert-dismissable'>";
					$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$message .= "<strong>Gagal!</strong> $product_name tidak berhasil diubah!";
					$message .= "</div>";
				}
				$this->session->set_flashdata('msg', $message); 
				redirect('admin/view_product');
			}
		}
	}
	
	public function add() {
		$this->form_validation->set_rules(
			'product_name', 'Nama Jasa',
			'required|min_length[10]',
			array(
				'required' => '<div class="alert alert-danger">Anda belum mengisi %s.</div>',
				'min_length' => '<div class="alert alert-danger">{field} harus berisi minimal sebanyak {param} karakter.</div>'
			)
		);

		$this->form_validation->set_rules(
			'product_price', 'Nilai', 'required|decimal', 
			array(
				'required' => '<div class="alert alert-danger">Anda belum mengisi %s.</div>',
				'decimal' => '<div class="alert alert-danger"> {field} harus berisi angka.</div>'
			)
		);

		$this->form_validation->set_rules(
			'product_description', 'Deskripsi Detail', 'required|min_length[10]',
			array(
				'required' => '<div class="alert alert-danger">Anda harus mengisi %s.</div>',
				'min_length' => '<div class="alert alert-danger">{field} harus berisi minimal sebanyak {param} karakter.</div>'
				)
		);
	
		$this->form_validation->set_rules(
			'product_short_description', 'Deskripsi Singkat', 
			'required|min_length[10]|max_length[500]',
			array(
				'required' => '<div class="alert alert-danger">Anda harus mengisi %s.</div>',
				'min_length' => '<div class="alert alert-danger">{field} harus berisi minimal sebanyak {param} karakter.</div>',
				'max_length' => '<div class="alert alert-danger">{field} harus berisi maksimal sebanyak {param} karakter.</div>'
			)
		);

		if ($this->form_validation->run() == FALSE) {
			$data["categories"] = $this->category_model->getAllCategoriesWithSubCategories();
			$this->load->view('layout/dashboard/header', array("title" => "Add Product"));
			$this->loadSidebar("show_product", "add_product_active");
			$this->load->view('admin/add_product',$data);
			$this->load->view('layout/dashboard/footer');
		} else {
			// Take product details
			$product_name = $data["product_name"] = $this->input->post('product_name');
			$data["price"] = $this->input->post('product_price');
			$data["description"] = $this->input->post('product_description');
			$data["short_desc"] = $this->input->post('product_short_description');
			$data["category_id"] = $this->input->post('product_category');
			$data["seller_id"] = $this->session->userdata('userid');

			// upload images
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 1000000;
			$config['max_height']           = 1000000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image_link')) {
				$error = $this->upload->display_errors();
				$data["categories"] = $this->category_model->getAllCategoriesWithSubCategories();
				$data["image_error"] = "<div class='alert alert-danger'>".$error."</div>";
				$this->load->view('layout/dashboard/header', array("title" => "Tambah Jasa"));
				$this->loadSidebar("show_product", "add_product_active");
				$this->load->view('admin/add_product',$data);
				$this->load->view('layout/dashboard/footer');
			} else {
				$file = $this->upload->data();
				$image_link = "uploads/".$file['file_name'];
				$insert = $this->product_model->addProduct($data, $image_link);
				if ($insert) {
					$message = "<div class='alert alert-success alert-dismissable'>";
					$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$message .= "<strong>Berhasil!</strong> $product_name berhasil ditambahkan!";
					$message .= "</div>";
				} else {
					$message = "<div class='alert alert-danger alert-dismissable'>";
					$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$message .= "<strong>Gagal!</strong> Gagal menambahkan $product_name";
					$message .= "</div>";
				}
				$this->session->set_flashdata('msg', $message); 
				redirect('admin/view_product');
			}
		}
	}
	
	public function changeActiveStatus($product_id, $active_flag) {
		// $this->gate_model->ajax_gate();
		$product_name = $this->product_model->getProductName($product_id);
		$change = $this->product_model->changeStatus($product_id, $active_flag);
		if ($change && $active_flag == 1) {
			$message = "<div class='alert alert-success alert-dismissable'>";
			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$message .= "<strong>Berhasil!</strong> $product_name berhasil dinonaktifkan!";
			$message .= "</div>";
		} elseif (!$change && $active_flag == 1) {
			$message = "<div class='alert alert-danger alert-dismissable'>";
			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$message .= "<strong>Fail!</strong> Gagal menonaktifkan $product_name";
			$message .= "</div>";
		} elseif($change && $active_flag == 0) {
			$message = "<div class='alert alert-success alert-dismissable'>";
			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$message .= "<strong>Berhasil!</strong> $product_name berhasil diaktifkan kembali!";
			$message .= "</div>";
		} elseif(!$change && $active_flag == 0) {
			$message = "<div class='alert alert-danger alert-dismissable'>";
			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$message .= "<strong>Gagal!</strong> Gagal mengaktifkan $product_name kembali.";
			$message .= "</div>";
		}
		$this->session->set_flashdata('msg', $message); 
		redirect('admin/view_product');
	}
	
	// public function addReview() {
	// 	$product_id = $data['product_id'] = $this->input->post('product_id');
	// 	if ($this->session->userdata('usertype') != 'user') {
	// 		$message = "<div class='alert alert-danger alert-dismissable mt-2'>";
	// 		$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	// 		$message .= "<strong>Gagal!</strong> Anda tidak bisa meninggalkan review.";
	// 		$message .= "</div>";
	// 	} else {
	// 		$data['user_id'] = $this->session->userdata('userid');
	// 		$data['review'] = $this->input->post('review');
	// 		$data['post_time'] = date("Y-m-d h:i:sa");
	// 		$insert = $this->product_model->addProductReview($data);
	// 		if ($insert) {
	// 			$message = "<div class='alert alert-success alert-dismissable mt-2'>";
	// 			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	// 			$message .= "<strong>Berhasil!</strong> Berhasil menambahkan review!";
	// 			$message .= "</div>";
	// 		} else {
	// 			$message = "<div class='alert alert-danger alert-dismissable mt-2'>";
	// 			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	// 			$message .= "<strong>Gagal!</strong> Gagal menambahkan review.";
	// 			$message .= "</div>";
	// 		}
	// 	}
	// 	$this->session->set_flashdata('msg', $message); 
	// 	redirect("shop/product/$product_id");
	// }

}
?>