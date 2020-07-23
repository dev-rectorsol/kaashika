<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

			$this->load->model('Common_model');
			$this->load->model('article_model');
			$this->load->model('Product_model');
			$this->load->model('Shop_model');
	  	$this->load->model('Homepage_model');

      $this->load->library('cart');
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
				//
				// $data['product_details']=  $this->Shop_model->select_product_details($id,'products');
				// foreach($data['product_details'] as $value){
				// $data['product_details']= $value;
				// }
				// $data['attribute']=  $this->Product_model->select_attr($id,'product_attributes');
				// $data['pics']=  $this->Product_model->select($id,'product_images');
				$data['cartIvalue'] = $this->cart->contents();
				// pre($data['cartIvalue'] );exit;
				$data['category']=  $this->Common_model->select('category');
				$data['article_data'] =  $this->article_model->select_article_data();
			//	print_r($data['article_data']);exit;
				$data['product']=  $this->Product_model->getProductList();
				$data['Best_Sell_product']=  $this->Product_model->select_best_product('Best_Sell','products');
				$data['on_Sell_product']=  $this->Product_model->select_best_product('On_Sell','products');
				$data['testimonial']=  $this->Common_model->select('testimonial');
				$data['category_data']=  $this->Common_model->select_limit_value('category');
		$data['carousel_saree']= $this->Common_model->select_carousel_by_type('saree');
		$data['carousel_suit'] = $this->Common_model->select_carousel_by_type('suit');
		$data['carousel_dupatta'] = $this->Common_model->select_carousel_by_type('dupatta');
		$data['carousel_lehenga'] = $this->Common_model->select_carousel_by_type('lehenga');

		$data['main_content'] = $this->load->view('home', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
        $this->load->view('index', $data);
    }

						public function arivel_slider()
							{
										$data=array();
										if($_POST) {

											//echo $_POST['id'];exit;
										$data['name']='Fabric Design List';
									  $data['product_by_category']=  $this->Shop_model->select($_POST['id'],'category','indexing');
										//print_r($data['product_by_category']);exit;
										$data['attribute']=  $this->Product_model->select_attr($_POST['id'],'product_attributes');
										$data['pics']=  $this->Product_model->select($_POST['id'],'product_images');
										$data['data'] = $this->load->view('new_arivel_slider', $data, true);
					   	      $this->load->view('arive_slider', $data);
									}
					  	}

							public function view()
								{
									$data=array();
									if($_POST) {
										//echo $_POST['id'];exit;
										$data['product_details']=  $this->Shop_model->select_product_details_byid($_POST['id'],'products');
										foreach($data['product_details'] as $value){
										$data['product_details']= $value;
										}
													//echo print_r($data['product_details']);exit;
										$data['attribute']=  $this->Product_model->select_attr($_POST['id'],'product_attributes');
										$data['pics']=  $this->Product_model->select($_POST['id'],'product_images');
									//	echo print_r($data['pics']);exit;
										// $data['data'] = $this->load->view('quickview/quickview', $data, true);
										$this->load->view('quickview/quickview1', $data);
                 }
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
        $data['cartItems'] = $this->cart->contents();
				$data['category']=  $this->Common_model->select('category');
				$data['testimonial']=  $this->Common_model->select('testimonial');
		$data['main_content'] = $this->load->view('about_us', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
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
        $data['cartIvalue'] = $this->cart->contents();
				$data['category']=  $this->Common_model->select('category');
		$data['main_content'] = $this->load->view('contact', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
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

		public function my_account(){
				$data = array();
				$data['page'] = 'Order';
				$data['product_data']=  $this->Common_model->select('products');
				$data['user_data']=  $this->Common_model->select('user_details');
				$data['main_content'] = $this->load->view('my_account', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
				$this->load->view('index', $data);
		}




}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */
