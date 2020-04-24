<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			if(check()){
				if(!isAdmin($this->session->userdata('roles')))
					redirect(base_url(), 'refresh');
      }else{
				 	redirect(base_url(), 'refresh');
			}
			$this->load->model('Common_model');
	}
	public function index()
	{
		$data= array();
        $data['page'] ='category';
        $data['tag']=  $this->Common_model->select('tags');
        $data['contact_data']=  $this->Common_model->select('contact');
		$data['main_content']= $this->load->view('contact/contact_list',$data, true);
		$this->load->view('index',$data);
	}



 public function Delete($id)
	{
            $data1=['id'=> $id];
            $this->Common_model->delete($data1,'contact');
            redirect(base_url() . 'admin/contact', 'refresh');
    }
    public function Edit($id)
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
             $aim=[
            'name' => $data1['name'],
            'parent' => $data1['parent'],
        ];
           $this->Common_model->update($aim,'id',$id,'category');
			redirect(base_url() . 'admin/category', 'refresh');
	}
	}
}
