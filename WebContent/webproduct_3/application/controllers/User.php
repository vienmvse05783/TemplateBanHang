<?php 
	Class User extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		//dang ki thanh vien.
		function register(){
			//neu da dang nhap roi thy chuyen ve trang thong tin thanh vien
			if($this->session->userdata('user_id_login')){
				redirect(site_url('user'));
			}

			$this->load->library('form_validation');
			$this->load->helper('form');
			if($this->input->post()){
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
				$this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email|callback_check_email');
				$this->form_validation->set_rules('password', 'Mật Khẩu', 'required|min_length[6]');
				$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
				$this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
				$this->form_validation->set_rules('address', 'Địa chỉ', 'required');

				if($this->form_validation->run()){
					
					$password = $this->input->post('password');
					$password = md5($password);

					$data = array(
						'name'     => $this->input->post('name'),
						'email'    => $this->input->post('email'),
						'phone'    => $this->input->post('phone'),
						'address'  => $this->input->post('address'),
						'password' => $password,
						'created'   => now(),
					);
					if($this->user_model->create($data)){
						$this->session->set_flashdata('message', 'Đăng kí thành viên thành công !');
					}else{
						$this->session->set_flashdata('message', 'Không thêm được !');
					}
					redirect(site_url(''));
				}
			}

			//hien thi ra view
			$this->data['temp'] = "site/user/register";
			$this->load->view('site/layout', $this->data);
		}


		function check_email(){
			$email = $this->input->post('email');
			$where = array('email' => $email);
			if($this->user_model->check_exists($where)){
				$this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
				return false;
			}
			return true;
		}

		//kiem tra dang nhap
		function login(){
			//neu da dang nhap roi thy chuyen ve trang thong tin thanh vien
			if($this->session->userdata('user_id_login')){
				redirect(site_url('user'));
			}

			$this->load->library('form_validation');
			$this->load->helper('form');
			if($this->input->post()){
				$this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email');
				$this->form_validation->set_rules('password', 'Mật Khẩu', 'required|min_length[6]');
				$this->form_validation->set_rules('login', 'login', 'callback_check_login');
				if($this->form_validation->run()){
					//lay thong tin thanh vien
					$user = $this->_get_user_info();
					//gắn sesion id của thành viên đã đăng nhập
					$this->session->set_userdata('user_id_login',$user->id);

					$this->session->set_flashdata('message', 'Đăng nhập thành công !');
					redirect();
				}
			}

			//hien thi ra view
			$this->data['temp'] = "site/user/login";
			$this->load->view('site/layout', $this->data);
		}

		function check_login(){
			$user = $this->_get_user_info();
			if($user){
				return true;
			}else{
				$this->form_validation->set_message(__FUNCTION__, '<p style="color: red;font-weight: bold;"> Không Đăng nhập thành công! </p>');
				return false;
			}
		}

		//lay thong tin cua thanh vien
		private function _get_user_info(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$password = md5($password);

			$this->load->model('user_model');
			$where = array('email'=>$email, 'password'=>$password);
			$user = $this->user_model->get_info_rule($where);
			return $user;
		}
		//chinh sua thong tin thanh vien
		function edit(){
			if(!$this->session->userdata('user_id_login')){
				redirect(site_url('user/login'));
			}
			//lay thong tin cua thanh vien
			$user_id = $this->session->userdata('user_id_login');
			$user = $this->user_model->get_info($user_id);
			if(!$user){
				redirect();
			}
			$this->data['user'] = $user;

			$this->load->library('form_validation');
			$this->load->helper('form');
			if($this->input->post()){
				$password = $this->input->post('password');
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');

				if($password){
					$this->form_validation->set_rules('password', 'Mật Khẩu', 'required|min_length[6]');
					$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
				}
				
				$this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
				$this->form_validation->set_rules('address', 'Địa chỉ', 'required');

				if($this->form_validation->run()){

					$data = array(
						'name'     => $this->input->post('name'),
						'phone'    => $this->input->post('phone'),
						'address'  => $this->input->post('address'),
					);
					if($password){
						$data['password'] = md5($password);
					}
					if($this->user_model->update($user_id, $data)){
						$this->session->set_flashdata('message', 'Chỉnh sửa thành công !');
					}else{
						$this->session->set_flashdata('message', 'Không sửa được !');
					}
					redirect(site_url('user'));
				}
			}

			//hien thi ra view
			$this->data['temp'] = "site/user/edit";
			$this->load->view('site/layout', $this->data);
		}

		//thong tin cua thanh vien
		function index(){
			if(!$this->session->userdata('user_id_login')){
				redirect();
			}
			$user_id = $this->session->userdata('user_id_login');
			$user = $this->user_model->get_info($user_id);
			if(!$user){
				redirect();
			}
			$this->data['user'] = $user;

			//hien thi ra view
			$this->data['temp'] = "site/user/index";
			$this->load->view('site/layout', $this->data);
		}

		//thuc hien dang xuat
		function logout(){
			if($this->session->userdata('user_id_login')){
				$this->session->unset_userdata('user_id_login');
			}
			$this->session->set_flashdata('message', 'Đăng xuất thành công !');
			redirect();
		}
	}