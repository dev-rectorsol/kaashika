<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Common_model');
			$this->load->model('Shop_model');
			$this->load->model('Product_model');
		$this->load->model('Homepage_model');
			$this->load->library('cart');
		
		$this->load->library("pagination");
		$this->load->helper('url');
		//Do your magic here
	}

	public function index(){

        // $data = array();
        // $data['page'] = 'Cart';
				// $social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				// $data['social'] = json_decode($social_value, true);
				//
				//  $title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				//  $data['title'] = json_decode($title_value, true);
				//
				//  $logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				//  $data['logo'] = json_decode($logo, true);
				//
				//  $contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				//  $data['contact'] = json_decode($contact_value, true);
				//
				// $data['category']=  $this->Common_model->select('category');
        // $data['main_content'] = $this->load->view('shop/shop', $data, true);
        // $this->load->view('index', $data);
    }

		public function shop_by_category($id){
	         $data = array();
					 $data['id']=$id;
					$data1['id'] = $id;
					// echo $id1;exit;
					if($_POST){
						if($_POST['sort']== 'New'){
							$data1['groupby']= 'created_at';
							$data1['order']='desc';
						}else if($_POST['sort'] == 'Discount'){
						$data1['groupby'] = 'discount';
						$data1['order'] = 'desc';
						} elseif ($_POST['sort'] == 'Price_Asc') {
						$data1['groupby'] = 'price';
						$data1['order'] = 'asc';
						} elseif ($_POST['sort'] == 'Price_Desc') {
							$data1['groupby'] = 'price';
							$data1['order'] = 'desc';
								}else{
						$data1['groupby'] = 'created_at';
						$data1['order'] = 'desc';	
								}
					} else {
						$data1['groupby'] = 'created_at';
						$data1['order'] = 'desc';
					}
		$config = $this->pagination_Config($id);
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		// echo $page;exit;
		if ($page == 0) {
			$start =  1;
			$end = ( $config['per_page']  > $config['total_rows']) ? $config['total_rows'] :  $config['per_page'];
		} else {
			$start = ((int) $this->uri->segment(5)) + 1;
			$end = ((int) $this->uri->segment(5) + $config['per_page']  > $config['total_rows']) ? $config['total_rows'] : (int) $this->uri->segment(5) + $config['per_page'];
		}

		$data1['page']=$page;
		$data1['per_page']= $config["per_page"];
		$data['result_count'] = "Showing " . $start . " - " . $end . " of " . $config['total_rows'] . " Results";

		$data["links"] = $this->pagination->create_links();
	        		$data['page'] = 'Category wishe product';
					$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
					$data['social'] = json_decode($social_value, true);

					 $title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
					 $data['title'] = json_decode($title_value, true);

					 $logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
					 $data['logo'] = json_decode($logo, true);

					 $contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
					 $data['contact'] = json_decode($contact_value, true);
	        		 $data['product_by_category']=  $this->Shop_model->select($data1,'category','indexing');
					 $data['count'] =count($data['product_by_category']);
					 $data['count'];
					 $data['attribute']=  $this->Product_model->select_attr($id,'product_attributes');
           			$data['fabric']=  $this->Shop_model->select_attr_name('attribute','Fabric');
					 $data['pattern']=  $this->Shop_model->select_attr_name('attribute','Pattern');
	         		$data['weaving']=  $this->Shop_model->select_attr_name('attribute','Weaving');
					 $data['category']=  $this->Common_model->select('category');
					 if($_POST){
					$this->load->view('shop/list', $data); 
					 }else{
			$data['content'] = $this->load->view('shop/list', $data, true);
			$data['main_content'] = $this->load->view('shop/shop', $data, true);
			$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
			$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
			$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
			$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
			$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
			$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
			$this->load->view('index', $data);
					 }
	       
	    }

			function color()
			 {
      // echo $id;exit;
				$data=array();
				$this->security->xss_clean($_POST);
				if ($_POST) {
				//	print_r($_POST);exit;
				$data['type']=$this->input->post('type');
				$data['searchtype']=$this->input->post('searchtype');
				if(isset($_POST['colorname']) && $_POST['colorname']!=''){
				$data['colorname'] = $this->input->post('colorname');
				}
			if (isset($_POST['fabricname']) && $_POST['fabricname'] != '') {
				$data['fabricname'] = $this->input->post('fabricname');
			}
			if (isset($_POST['weavingname']) && $_POST['weavingname'] != '') {
				$data['weavingname'] = $this->input->post('weavingname');
			}
			if (isset($_POST['parternname']) && $_POST['parternname'] != '') {
				$data['parternname'] = $this->input->post('parternname');
			}
			if (isset($_POST['max']) && isset($_POST['min']) && $_POST['max'] != ''&& $_POST['min'] != '') {
				$data['max'] = $this->input->post('max');
				$data['min'] = $this->input->post('min');
			}	
			
				
				$data['id']=$this->input->post('id');

				if($data['searchtype']=='search')
				{
			  $data['items']=  $this->Shop_model->select_attr_price($data);
			}else{
			 	 // echo  $data['name'];exit;
				if(!null($_POST['colorname'] && $_POST['colorname']!=""))
				{
					  $data['id']=$this->input->post('id');
						$name=$this->input->post('colorname');
						$data['name'][]=$name;

				}
				if(!null($_POST['fabricname'] && $_POST['fabricname']!=""))
				{
					 $data['id']=$this->input->post('id');
						$name=$this->input->post('fabricname');
						$data['name'][]=$name;
				}
				$data['items']=  $this->Shop_model->select_attr_price($data);
     }


				$data['data'] = $this->load->view('shop/color_pro', $data, true);
				$this->load->view('shop/index', $data);
			}
		}

			// function price()
			//  {
			// // echo $id;exit;
			// 	$data=array();
			// 	$data['min']=$this->input->post('min');
			// 	$data['price']=$this->input->post('price');
			// 	$data['max']=$this->input->post('max');
			// 	$data['id']=$this->input->post('id');
			// 	// echo $min.$max.$id;exit;
			// 	$data['items']=  $this->Shop_model->select_attr_price($data);
      //  // print_r($data['items']);exit;
			// 	$data['data'] = $this->load->view('shop/color_pro', $data, true);
			// 	$this->load->view('shop/index', $data);
			// }
			//
			// function fabric_filter()
			//  {
			// // echo $id;exit;
			// 	$data=array();
			// 	$name=$this->input->post('name');
			// 	$id=$this->input->post('id');
			// 	$data['items']=  $this->Shop_model->select_attr_price($id,$name,'category','indexing');
			// 	// echo "<pre>";
			// 	// print_r($data['items']);exit;
			// 	$data['data'] = $this->load->view('shop/color_pro', $data, true);
			// 	$this->load->view('shop/index', $data);
			// }
			// function patern_filter()
			//  {
			// // echo $id;exit;
			// 	$data=array();
			// 	$name=$this->input->post('name');
			// 	$id=$this->input->post('id');
			// 	$data['items']=  $this->Shop_model->select_attr_price($id,$name,'category','indexing');
			// 	// echo "<pre>";
			// 	// print_r($data['items']);exit;
			//
			// 	$data['data'] = $this->load->view('shop/color_pro', $data, true);
			// 	$this->load->view('shop/index', $data);
			// }
			// function weaving_filter()
			//  {
			// // echo $id;exit;
			// 	$data=array();
			// 	$name=$this->input->post('name');
			// 	$id=$this->input->post('id');
			// 	$data['items']= $this->Shop_model->select_attr_price($id,$name,'category','indexing');
			// 	// echo "<pre>";
			// 	// print_r($data['items']);exit;
			// 	$data['data'] = $this->load->view('shop/color_pro', $data, true);
			// 	$this->load->view('shop/index', $data);
			// }

			public function product_details($id){
				$data = array();
		
		// echo $id1;exit;
		if ($_POST) {
			if ($_POST['sort'] == 'New') {
				$data1['groupby'] = 'created_at';
				$data1['order'] = 'desc';
			} else if ($_POST['sort'] == 'Discount') {
				$data1['groupby'] = 'discount';
				$data1['order'] = 'desc';
			} elseif ($_POST['sort'] == 'Price_Asc') {
				$data1['groupby'] = 'price';
				$data1['order'] = 'asc';
			} elseif ($_POST['sort'] == 'Price_Desc') {
				$data1['groupby'] = 'price';
				$data1['order'] = 'desc';
			} else {
				$data1['groupby'] = 'created_at';
				$data1['order'] = 'desc';
			}
		} else {
			$data1['groupby'] = 'created_at';
			$data1['order'] = 'desc';
		}
		$config = $this->pagination_Config($id);
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		if ($page == 0) {
			$start =  1;
			$end = ($config['per_page']  > $config['total_rows']) ? $config['total_rows'] :  $config['per_page'];
		} else {
			$start = ((int) $this->uri->segment(5)) + 1;
			$end = ((int) $this->uri->segment(5) + $config['per_page']  > $config['total_rows']) ? $config['total_rows'] : (int) $this->uri->segment(5) + $config['per_page'];
		}

		$data1['page'] = $page;
		$data1['per_page'] = $config["per_page"];
		$data['result_count'] = "Showing " . $start . " - " . $end . " of " . $config['total_rows'] . " Results";

		$data["links"] = $this->pagination->create_links();
		        $data['page'] = 'product details';
						$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
						$data['social'] = json_decode($social_value, true);
						$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
						$data['title'] = json_decode($title_value, true);

						$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
						$data['logo'] = json_decode($logo, true);

						$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
						$data['contact'] = json_decode($contact_value, true);

            $data['product_details']=  $this->Shop_model->select_product_details_byid($id,'products');
						foreach($data['product_details'] as $value){
						$data['product_details']= $value;
						}
						$data1['id'] = $data['product_details']['port'];
						// echo "<pre>";
						//    print_r($data['product_details']);exit;
						$data['related_Product']=  $this->Shop_model->select($data1,'category','indexing');
            // echo "<pre>";
						// print_r($data['related_Product']);exit;
						$data['category']=  $this->Common_model->select('category');
						$data['attribute']=  $this->Product_model->select_attr($id,'product_attributes');
						$data['pics']=  $this->Product_model->select($id,'product_images');
				$data['main_content'] = $this->load->view('product/product_details', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
		        $this->load->view('index', $data);
		    }



		public function shop_list_left(){
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
			  $data['main_content'] = $this->load->view('shop/shop_list_left', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
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
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
        $this->load->view('index', $data);
    }
public function pagination_Config($id)
	{
		$config = array();
		$config["base_url"] = base_url() . "web/shop/shop_by_category/". $id.'/';
		$config["total_rows"] = $this->Shop_model->get_count($id, 'category', 'indexing');
		$config["per_page"] = 20;
		$config["uri_segment"] = 5;
		// $config['use_page_numbers'] = TRUE;
		$config['num_links'] =5;
		
		$config['display_pages'] = TRUE;
		
		$config['next_link']        = 'Next <i class="pe-7s-angle-right"></i>';
		$config['prev_link']        = 'Prev <i class="pe-7s-angle-left"></i>';
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['full_tag_open']    = '<ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul>';
		$config['attributes']       = ['class' => 'page-link'];
		$config['first_tag_open']   = '<li class="page-item">';
		$config['first_tag_close']  = '</li>';
		$config['prev_tag_open']    = '<li class="page-item">';
		$config['prev_tag_close']   = '</li>';
		$config['next_tag_open']    = '<li class="page-item">';
		$config['next_tag_close']   = '</li>';
		$config['last_tag_open']    = '<li class="page-item">';
		$config['last_tag_close']   = '</li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['num_tag_open']     = '<li class="page-item">';
		$config['num_tag_close']    = '</li>';
		$this->pagination->initialize($config);
		
		return $config;
	}

}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
