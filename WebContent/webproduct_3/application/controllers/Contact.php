<?php 
	Class Contact extends MY_Controller{
		function index(){
			//lay danh sach slide
			$this->load->model('contact_model');
			$contact_list = $this->contact_model->get_info(2);
			$this->data['contact_list'] = $contact_list;

			//lay danh sach san pham moi
			

			$this->data['temp'] = 'site/contact/index';
			$this->load->view('site/layout',$this->data);
		}
	}