<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Common_model');
		//Do your magic here
	}

	public function index(){
        $data = array();
        $data['page'] = 'product details';
        $data['main_content'] = $this->load->view('product/product_details', $data, true);
        $this->load->view('index', $data);
    }

		public function product_variable(){
				$data = array();
				$data['page'] = 'Cart';
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
			  $data['main_content'] = $this->load->view('product/product_variable', $data, true);
				$this->load->view('index', $data);
		}



}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
