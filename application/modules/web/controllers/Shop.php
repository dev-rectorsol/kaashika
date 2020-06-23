<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Common_model');
			$this->load->model('Shop_model');
			$this->load->model('Product_model');
			$this->load->library('cart');
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
					// echo $id1;exit;
	        $data['page'] = 'Category wishe product';
					$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
					$data['social'] = json_decode($social_value, true);

					 $title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
					 $data['title'] = json_decode($title_value, true);

					 $logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
					 $data['logo'] = json_decode($logo, true);

					 $contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
					 $data['contact'] = json_decode($contact_value, true);
	         $data['product_by_category']=  $this->Shop_model->select($id,'category','indexing');
					 $data['count'] =count($data['product_by_category']);
					 $data['count'];
					 $data['attribute']=  $this->Product_model->select_attr($id,'product_attributes');
           $data['fabric']=  $this->Shop_model->select_attr_name('attribute','Fabric');
					 $data['pattern']=  $this->Shop_model->select_attr_name('attribute','Pattern');
	         $data['weaving']=  $this->Shop_model->select_attr_name('attribute','Weaving');
					 $data['category']=  $this->Common_model->select('category');
	         $data['main_content'] = $this->load->view('shop/shop', $data, true);
	         $this->load->view('index', $data);
	    }

			function color()
			 {
      // echo $id;exit;
				$data=array();
				$this->security->xss_clean($_POST);
				if ($_POST) {
				$data['type']=$this->input->post('type');
				$data['searchtype']=$this->input->post('searchtype');
        $data['colorname']=$this->input->post('colorname');
			  $data['fabricname']=$this->input->post('fabricname');
				$data['weavingname']=$this->input->post('weavingname');
				$data['parternname']=$this->input->post('parternname');
				$data['max']=$this->input->post('max');
				$data['min']=$this->input->post('min');
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
						// echo "<pre>";
						//    print_r($data['product_details']);exit;
						$data['related_Product']=  $this->Shop_model->select($data['product_details']['port'],'category','indexing');
            // echo "<pre>";
						// print_r($data['related_Product']);exit;
						$data['category']=  $this->Common_model->select('category');
						$data['attribute']=  $this->Product_model->select_attr($id,'product_attributes');
						$data['pics']=  $this->Product_model->select($id,'product_images');
		        $data['main_content'] = $this->load->view('product/product_details', $data, true);
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


}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
