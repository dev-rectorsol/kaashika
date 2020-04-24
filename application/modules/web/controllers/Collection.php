<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Common_model');
		//Do your magic here
	}

	public function index(){
        $data = array();
        $data['page'] = 'Cart';
        $data['main_content'] = $this->load->view('collection/cart', $data, true);
        $this->load->view('index', $data);
    }



		public function cart(){
				$data = array();
				$data['page'] = 'Cart';
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
			  $data['main_content'] = $this->load->view('collection/cart', $data, true);
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
    public function compare(){
        $data = array();
        $data['page'] = 'Checkout';
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
        $data['main_content'] = $this->load->view('collection/compare', $data, true);
        $this->load->view('index', $data);
    }
    public function wishlist(){
        $data = array();
        $data['page'] = 'Checkout';
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
        $data['main_content'] = $this->load->view('collection/wishlist', $data, true);
        $this->load->view('index', $data);
    }

}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
