<?php
class user_model extends CI_Model
{
 var $table = "usres";
function __construct() 
{
parent::__construct();
}
function data_insert($tablename,$data)
{
$this->db->insert($tablename, $data);
}
  
function has_record($tablename,$data)
{

    $query = $this->db->get_where($tablename, $data);
	$getresult=$query->result();
	return ($query->num_rows()!=0?$getresult[0]->id:0);
}  
public function get_info($tablename,$data)
{

    $query = $this->db->get_where($tablename, $data);
	$getresult=$query->result();
	return $getresult;
}

public function update_info($tablename,$field,$field_value,$data)
{
    $this->db->where($field, $field_value);
    $this->db->update($tablename, $data);
}
public function leftright_join($selectdata,$tablename1,$tablename2,$condition,$type,$fieldname,$fieldvalue)
{
    $this->db->select($selectdata);
    $this->db->from($tablename1);
    $this->db->join($tablename2, $condition, $type)->where($fieldname,$fieldvalue);
    $getresult=$this->db->get()->result();
	return $getresult;
} 
public function insert_data($tablename,$data)
{
   $this->db->insert($tablename,$data);
   $insert_id = $this->db->insert_id();
   return $insert_id;
} 
}


?>