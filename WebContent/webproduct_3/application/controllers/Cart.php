<?php 
	Class Cart extends MY_Controller{
		function __construct(){
			parent::__construct();
			
		}
		//phuong thuc them san pham vao gio hang
		function add(){
			$this->load->model('product_model');
			//lay id san pham them vao gio hang
			$id = $this->uri->rsegment(3);
			$product = $this->product_model->get_info($id);
			if(!$product){
				redirect();
			}
			//so luong san pham
			$qty = 1;
			$price = $product->price;
			if($product->discount > 0){
				$price = $product->price - $product->discount;
			}
			//thong tin them vao gio hang
			$data = array();
			$data['id'] = $product->id;
			$data['qty'] = $qty;
			$data['name'] = url_title($product->name);
			$data['image_link'] = $product->image_link;
			$data['price'] = $price;
			$this->cart->insert($data);

			//chuyen san trang danh sach san pham trong gio hang.
			redirect(base_url('cart'));
		}

		//hien thi ra danh sach sp trong gio hang.

		function index(){
			//thong tin gio hang
			$carts = $this->cart->contents();
			//tong so san pham co trong gio hang.
			$total_items = $this->cart->total_items();
			$this->data['carts'] = $carts;
			$this->data['total_items'] = $total_items;
			$this->data['temp'] = 'site/cart/index';
			$this->load->view('site/layout', $this->data);
		}
        //cap nhat gio hang
        function update(){
            //thong tin gio hang
            $carts = $this->cart->contents();
            foreach ($carts as $key=>$row) {
                //tong so luong san pham
                $total_qty = $this->input->post('qty_'.$row['id']);
                $data = array();
                $data['rowid'] = $key;
                $data['qty'] = $total_qty;
                $this->cart->update($data);
            }
            //chuyen san trang danh sach san pham trong gio hang.
            redirect(base_url('cart'));
        }
        //xoa san pham trong gio hang
        function del(){
            $id = $this->uri->rsegment(3);
            $id = intval($id);
            //truong hop xoa 1 sp nao do
            if($id > 0) {
                //thong tin gio hang
                $carts = $this->cart->contents();
                foreach ($carts as $key=>$row) {
                    if($row['id'] == $id){
                        //tong so luong san pham
                        $data = array();
                        $data['rowid'] = $key;
                        $data['qty'] = 0;
                        $this->cart->update($data);
                     }
                }
                
            }else{
                //xoa toan bo gio hang
                $this->cart->destroy();
            }
            //chuyen san trang danh sach san pham trong gio hang.
            redirect(base_url('cart'));
        }
	}