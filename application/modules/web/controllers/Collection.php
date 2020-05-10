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
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
			  $data['main_content'] = $this->load->view('collection/cart', $data, true);
				$this->load->view('index', $data);
		}
    public function checkout(){
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
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('collection/checkout', $data, true);
        $this->load->view('index', $data);
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
        $data['product_data']=  $this->Common_model->select('products');
        $data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('collection/compare', $data, true);
        $this->load->view('index', $data);
    }
    public function wishlist(){
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
        $data['user_data']=  $this->Common_model->select('user_details');
				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('collection/wishlist', $data, true);
        $this->load->view('index', $data);
    }

}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
