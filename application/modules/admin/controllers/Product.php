<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
    $data['page'] ='Products';
    $data['tag']=  $this->Common_model->select('tags');
    $data['product_data']=  $this->Common_model->select('products');
		$data['attribute']=  $this->Common_model->select('attribute');
    $data['main_content']= $this->load->view('product/add',$data, true);
		$this->load->view('index',$data);
	}
	public function attribute()
	{
		$data= array();
		$data['page'] ='attribute';
		$data['tag']=  $this->Common_model->select('tags');
		$data['product_data']=  $this->Common_model->select('products');
		$data['main_content']= $this->load->view('product/add_attribute',$data, true);
		$this->load->view('index',$data);
	}
	public function Add_attribute()
	{
		 if($_POST){
		 $data1=$this->security->xss_clean($_POST);
		 	for($i = 0; $i < count($data1['attribute']); $i++){
		 $data=[
	  'pro_id' => $data1['product'],
		'attribute' => $data1['attribute'][$i],
		'value' => $data1['value'][$i],

		];
		$this->Common_model->insert($data,'attribute');
	}
		redirect(base_url() . 'admin/Product', 'refresh');
		}
	}

    public function Add()
		{
			 if($_POST){
			 $data1=$this->security->xss_clean($_POST);
			 $data=[
			'product' => $data1['product'],
			'source' => $data1['source'],
			'price' => $data1['price'],
			'discount' => $data1['discount'],
			];
			$this->Common_model->insert($data,'products');
			redirect(base_url() . 'admin/Product', 'refresh');
			}
		}

      public function AddTag()
			{
				if($_POST){
			 $data1=$this->security->xss_clean($_POST);
		         $tag=[
		            'title' => $data1['name'],
		        ];
            $this->Common_model->insert($tag,'tags');
			redirect(base_url() . 'admin/category', 'refresh');
				}
			}
      public function Delete($id)
       	{
            $data1=['id'=> $id];
            $this->Common_model->delete($data1,'category');
            redirect(base_url() . 'admin/Product', 'refresh');
        }
    public function Edit($id)
   	{
	    	   if($_POST){
			     $data1=$this->security->xss_clean($_POST);
           $this->Common_model->update($data1,'id',$id,'products');
			     redirect(base_url() . 'admin/Product', 'refresh');
	    }
	}
}
