<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

			$this->load->model('Common_model');
			$this->load->library('cart');
		$this->load->model('Homepage_model');
		//Do your magic here
	}

	public function collection($id){
        
        $data = array();
        $data['page'] = 'Collection';
				$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
				$data['social'] = json_decode($social_value, true);
				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
				$data['title'] = json_decode($title_value, true);

				$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
				$data['logo'] = json_decode($logo, true);

				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
				$data['contact'] = json_decode($contact_value, true);

                $data['category']=  $this->Common_model->select('category');
        
        $data['collection'] =  $this->Common_model->get_collection($id);
     
        $data['product'] =  $this->Common_model->get_collection_product($id);
        //     echo '<pre>';
        //    // print_r($data['product']);
        //     exit;
        $data['content'] = $this->load->view('pages/list', $data, true);
		$data['main_content'] = $this->load->view('pages/index', $data, true);
		$data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
		$data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
		$data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
		$data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
		$data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
		$data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
        $this->load->view('index', $data);
    }

		public function technique($id){
		$data = array();
		$data['page'] = 'Technique';
		$social_value = !empty($this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'social_icon'))->row()->setting_value : '';
		$data['social'] = json_decode($social_value, true);
		$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '';
		$data['title'] = json_decode($title_value, true);

		$logo = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '';
		$data['logo'] = json_decode($logo, true);

		$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '';
		$data['contact'] = json_decode($contact_value, true);

		$data['category'] =  $this->Common_model->select('category');

		$data['technique'] =  $this->Common_model->select_option($id, 'technique_id','technique');

		
		//     echo '<pre>';
		//    // print_r($data['product']);
		//     exit;
		
		$data['main_content'] = $this->load->view('pages/technique', $data, true);
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
