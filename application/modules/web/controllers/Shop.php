<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Common_model');
		//Do your magic here
	}

	public function index(){
        $data = array();
        $data['page'] = 'Cart';
        $data['main_content'] = $this->load->view('shop/shop', $data, true);
        $this->load->view('index', $data);
    }



		public function shop_list_left(){
				$data = array();
				$data['page'] = 'Cart';
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
			  $data['main_content'] = $this->load->view('shop/shop_list_left', $data, true);
				$this->load->view('index', $data);
		}
    public function checkout(){
        $data = array();
        $data['page'] = 'Checkout';
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
        $data['main_content'] = $this->load->view('collection/checkout', $data, true);
        $this->load->view('index', $data);
    }


}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
