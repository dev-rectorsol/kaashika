<?php

class Product_model extends CI_Model{

    public function __construct()
        {
                $this->load->database();
        }
    public function putdata($data){

        $this->db->insert('details', $data);

    }

    public function getdata(){
        $this->db->order_by("id", "desc");
       $query= $this->db->get('details');
      // echo "<pre>"; print_r($query->result_array());exit;
        return $query->result_array();
    }

    public function delete($id){
        $this->db->delete('details',array('id'=>$id));
    }

    public function update($id,$data,$table){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }

    public function getSingleData($id){
        $this->db->where('id',$id);
        $query= $this->db->get('details');
        return $query->result_array();
    }
    function select($id,$table){
      //echo $id;
        $this->db->select();
        $this->db->from($table);
        $this->db->where('product_id',$id);
        $query = $this->db->get();
        //echo $this->db->last_query($query);exit;
        $query = $query->result_array();
        return $query;
    }
    function select_product($id,$table){
      //echo $id;
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        //echo $this->db->last_query($query);exit;
        $query = $query->result_array();
        return $query;
    }
    function select_tag($id,$type){
      //echo $id;
        $this->db->select('indexing.id,tags.title');
        $this->db->from('indexing');
        $this->db->where('root',$id);
        $this->db->where('type',$type);
        $this->db->join('tags','tags.id=indexing.port','inner');
        $query = $this->db->get();
        //echo $this->db->last_query($query);exit;
        $query = $query->result_array();
        return $query;
    }
    function select_cat($id,$type){
      //echo $id;
        $this->db->select('indexing.id,category.name');
        $this->db->from('indexing');
        $this->db->where('root',$id);
        $this->db->where('type',$type);
        $this->db->join('category','category.id=indexing.port','inner');
        $query = $this->db->get();
        //echo $this->db->last_query($query);exit;
        $query = $query->result_array();
        return $query;
    }
    function select_attr($id,$table){
      //echo $id;
          $this->db->select('attribute.name,product_attributes.product_attribute_id as id,product_attributes.value as value');
        $this->db->from($table);
        $this->db->where('product_id',$id);
        
        $this->db->join('attribute','attribute.id=product_attributes.attribute_id','inner');
        $query = $this->db->get();
        //echo $this->db->last_query($query);exit;
        $query = $query->result_array();
        return $query;
    }
}
