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

    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('details',$data);
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
        $this->db->where('pro_id',$id);
        $query = $this->db->get();
        //echo $this->db->last_query($query);exit;
        $query = $query->result_array();
        return $query;
    }
}
