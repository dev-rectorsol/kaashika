<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    if(check()){
      if(!isStudent($this->session->userdata('roles')))
        redirect(base_url(), 'refresh');
    }else{
        redirect(base_url(), 'refresh');
    }
    $this->load->model('Homepage_model');
	}

  function index(){
		$data = array();
    $data['main_content'] = $this->load->view('home', $data, true);
    $data['Menu_shop_image'] = $this->Homepage_model->get_menu_by_type('shop');
    $data['Menu_shop_text'] = $this->Common_model->get_menu('shop');
    $data['Menu_coll_image'] = $this->Homepage_model->get_menu_by_type('collection');
    $data['Menu_coll_text'] = $this->Common_model->get_menu('collection');
    $data['Menu_tech_image'] = $this->Homepage_model->get_menu_by_type('technique');
    $data['Menu_tech_text'] = $this->Common_model->get_menu('technique');
		$this->load->view('index', $data);
  }
}

?>
