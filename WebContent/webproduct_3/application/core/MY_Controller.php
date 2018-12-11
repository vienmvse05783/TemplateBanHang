<?php 
	Class MY_Controller extends CI_Controller{
		public $data = array();
		
		function __construct(){
			parent::__construct();
			$controller = $this->uri->segment(1);
			switch ($controller) {
				case 'admin':
					# code...
				$this->load->helper('admin');
				$this->_check_login();
				//kiem tra xem thanh vien da dang nhap chua 
					$admin_id = $this->session->userdata('admin_id');
					$this->data['admin_id'] = $admin_id;
					//neu da dang nhap thanh cong thy lay thong tin thanh vien
					if($admin_id){
						$this->load->model('admin_model');
						$admin_info = $this->admin_model->get_info($admin_id);
						$this->data['admin_info'] = $admin_info;
					}
					break;
				
				default:
					//lay danh sach danh muc san pham.
					$this->load->model('catalog_model');
					$input = array();
					$input['where'] = array('parent_id' => 0);
					$catalog_list = $this->catalog_model->get_list($input);
					foreach($catalog_list as $row){
						$input['where'] = array('parent_id' => $row->id);
						$subs = $this->catalog_model->get_list($input);
						$row->subs = $subs;
					}
					$this->data['catalog_list'] = $catalog_list;

					//lay danh sach bai viet moi.
					$this->load->model('news_model');
					$input = array();
					$input['limit'] = array(5, 0);
					$news_list = $this->news_model->get_list($input);
					$this->data['news_list'] = $news_list;

					//kiem tra xem thanh vien da dang nhap chua 
					$user_id_login = $this->session->userdata('user_id_login');
					$this->data['user_id_login'] = $user_id_login;
					//neu da dang nhap thanh cong thy lay thong tin thanh vien
					if($user_id_login){
						$this->load->model('user_model');
						$user_info = $this->user_model->get_info($user_id_login);
						$this->data['user_info'] = $user_info;
					}


					//goi toi thu vien cart
					$this->load->library('cart');
					$this->data['total_items'] = $this->cart->total_items();
					$this->data['total'] = $this->cart->total();
					break;
			}
		}
		private function _check_login(){
			$controller = $this->uri->rsegment('1');
			$controller = strtolower($controller);

			$login = $this->session->userdata('login');
			if(!$login  && $controller != 'login'){
				redirect(admin_url('login'));
			}
			if($login && $controller == 'login'){
				redirect(admin_url('home'));
			}else if(!in_array($controller, array('login', 'home'))){
				// kiem tra quyen
				$admin_id = $this->session->userdata('admin_id');
				$admin_root = $this->config->item('root_admin');
				if($admin_id != $admin_root){
					$permissions_admin = $this->session->userdata('permissions');
					$controller = $this->uri->rsegment(1);
					$action = $this->uri->rsegment(2);
					$check = true;


					if(!isset($permissions_admin->{$controller})){
						$check = false;
					}

					$permissions_actions = $permissions_admin->{$controller};

					if(!in_array($action, $permissions_actions)){
						$check = false;
					}
					if(!$check){
						$this->session->set_flashdata('message1', 'Bạn Không có Quyền truy cập vào trang này !');
						redirect(base_url('admin'));
					}
				}
				

			}
		}
	}
 