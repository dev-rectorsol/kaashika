<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Collection extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
			$this->load->model('Common_model');
			$this->load->model('Shop_model');
			$this->load->model('Product_model');
			$this->load->model('article_model');
			$this->load->library('cart');
			$this->load->library(['auth', 'session']);

		//Do your magic here
	}
	public function index(){
		$data = array();
		$data['page'] = 'Wishlist';
		$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
		$data['social'] = json_decode($social_value, true);

		$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
		$data['title'] = json_decode($title_value, true);

		$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
		$data['logo'] = json_decode($logo, true);

		$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
		$data['contact'] = json_decode($contact_value, true);

		$data['product_data']=  $this->Common_model->select('products');
    $data['cartIvalue'] = $this->cart->contents();
		$data['cartItems'] = $this->cart->contents();
		// echo "<pre>";
		// print_r($data['cartItems']);exit;
		$data['category']=  $this->Common_model->select('category');
		$data['main_content'] = $this->load->view('collection/wishlist', $data, true);
		$this->load->view('index', $data);
    }
		public function wishlist($id){
		//	echo $id;
				$data['product_details']=  $this->Shop_model->select_product_details($id,'products');
			//	print_r($data['product_details']);exit;
				foreach($data['product_details'] as $value){
					$data1 = array(
					 'id'    => $value['id'],
					 'qty'    => 1,
					 'price'    => $value['price'],
					 'name'    => $value['name'],
					 'image' => $value['profile_pic']
			 );
			// print_r($data1);exit;
		$this->cart->insert($data1);
			 // Redirect to the cart page
			  redirect('web/Collection/');
				}

	}
		function updateItemQty(){
				$update = 0;

				// Get cart item info
				$rowid = $this->input->get('rowid');
				$qty = $this->input->get('qty');

				// Update item in the cart
				if(!empty($rowid) && !empty($qty)){
						$data = array(
								'rowid' => $rowid,
								'qty'   => $qty
						);
						$update = $this->cart->update($data);
				}
				// Return response
				echo $update?'ok':'err';
				redirect('web/collection/');
		}

		function removeItem($rowid){
				// Remove item from cart
				$remove = $this->cart->remove($rowid);
				// Redirect to the cart page
				redirect('web/home/');
		}

		function updatecart(){
				$update = 0;

				// Get cart item info
				$rowid = $this->input->get('rowid');
				$qty = $this->input->get('qty');

				// Update item in the cart
				if(!empty($rowid) && !empty($qty)){
						$data = array(
								'rowid' => $rowid,
								'qty'   => $qty
						);
						$update = $this->cart->update($data);
				}
				// Return response
				echo $update?'ok':'err';
				redirect('web/home/');
		}

		public function addtocard($id){

				$data['product_details']=  $this->Shop_model->select_product_details($id,'products');

				foreach($data['product_details'] as $value){

					$carddata = array(
					 'id'    => $value['id'],
					 'qty'    => 1,
					 'price'  => $value['price'],
					 'name'  => $value['name'],
					 'image' => $value['profile_pic']
			 );
		   $this->cart->insert($carddata);
			  redirect('web/home');
				}

	}




		public function cart(){
				$data = array();
	      $data['page'] = 'Cart';
				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				$data['social'] = json_decode($social_value, true);
				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				$data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				$data['contact'] = json_decode($contact_value, true);
	      $data['cartIvalue'] = $this->cart->contents();
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
				$data['main_content'] = $this->load->view('collection/cart', $data, true);
				$this->load->view('index', $data);
		}



    public function checkout(){
        $data = array();
        $data['page'] = 'Checkout';
		    $email=$this->session->userdata('email');
				$phone=$this->session->userdata('phone');
			  $username=$this->session->userdata('username');
				$userid=$this->session->userdata('userID');

				if(check()) {
					// echo print_r($check);exit;
        $data['email']=$email;
		  	$data['phone']=$phone;
			  $data['username']=$username;
				$data['userid']=$userid;
			//	echo $data['userid'];exit;

				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				$data['social'] = json_decode($social_value, true);
				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				$data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				$data['contact'] = json_decode($contact_value, true);

				$data['cartIvalue'] = $this->cart->contents();
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('collection/checkout',$data, true);
        $this->load->view('index', $data);
			}
			else{
				 $this->load->view('authentication/login');
			}
    }


	function wish($rowid){
			// Remove item from cart
			$remove = $this->cart->remove($rowid);

			// Redirect to the cart page
			redirect('web/collection/');
	}
    public function compare(){
        $data = array();
        $data['page'] = 'Checkout';
				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				$data['social'] = json_decode($social_value, true);
				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				$data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				$data['contact'] = json_decode($contact_value, true);
				$data['cartIvalue'] = $this->cart->contents();
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('collection/compare', $data, true);
        $this->load->view('index', $data);
    }


}
/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
