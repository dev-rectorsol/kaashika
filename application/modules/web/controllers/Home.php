<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

			$this->load->model('Common_model');
			$this->load->model('article_model');
		//Do your magic here
	}

	public function index(){
        $data = array();
        $data['page'] = 'Education Board';
				$data['homeSlider'] = 1;
			  $slider_value = !empty($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value : '';
			  $data['slider'] = json_decode($slider_value, true);

				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
			  $data['social'] = json_decode($social_value, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
      	$data['contact'] = json_decode($contact_value, true);

				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
		    $data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$data['category']=  $this->Common_model->select('category');
        $data['article_data']=  $this->article_model->select_article_data();
				// print_r($data['article_data']);exit;
        $data['product']=  $this->Common_model->select('products');
				$data['testimonial']=  $this->Common_model->select('testimonial');
				$data['product_data']=  $this->Common_model->select_limit_value('products');
        $data['main_content'] = $this->load->view('home', $data, true);
        $this->load->view('index', $data);
    }

    public function about(){
        $data = array();
        $data['page'] = 'About Us';
				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				$data['social'] = json_decode($social_value, true);
				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				$data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				$data['contact'] = json_decode($contact_value, true);
				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('about_us', $data, true);
        $this->load->view('index', $data);
    }

    public function courses(){
        $data = array();
        $data['page'] = 'Courses';
        $data['main_content'] = $this->load->view('courses', $data, true);
        $this->load->view('index', $data);
    }

    public function courseDetails(){
        $data = array();
        $data['page'] = 'course details';
        $data['main_content'] = $this->load->view('courseDetails', $data, true);
        $this->load->view('index', $data);
    }

    public function event(){
        $data = array();
        $data['page'] = 'Event';
        $data['main_content'] = $this->load->view('event', $data, true);
        $this->load->view('index', $data);
    }

    public function contact(){
        $data = array();
        $data['page'] = 'contact';
				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				$data['social'] = json_decode($social_value, true);

				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				$data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				$data['contact'] = json_decode($contact_value, true);

				$data['category']=  $this->Common_model->select('category');
        $data['main_content'] = $this->load->view('contact', $data, true);
        $this->load->view('index', $data);
    }
		public function Add_contact()
		{
			if($_POST){
			 $data1=$this->security->xss_clean($_POST);
			$data=[
			'name' => $data1['name'],
			'phone' => $data1['phone'],
			'email' => $data1['email'],
			'subject' => $data1['subject'],
			'message' => $data1['message'],
			// 'icon' => $data1['icon'],
			];
			$this->Common_model->insert($data,'contact');
			redirect(base_url() . 'web/Home/contact', 'refresh');
			}
		}

		public function order(){
				$data = array();
				$data['page'] = 'Order';
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
				$data['main_content'] = $this->load->view('pages/order', $data, true);
				$this->load->view('index', $data);
		}
		public function my_account(){
				$data = array();
				$data['page'] = 'Order';
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
				$data['main_content'] = $this->load->view('my_account', $data, true);
				$this->load->view('index', $data);
		}

    public function faq(){
        $data = array();
        $data['page'] = 'faq';
        $data['main_content'] = $this->load->view('faq', $data, true);
        $this->load->view('index', $data);
    }



}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
