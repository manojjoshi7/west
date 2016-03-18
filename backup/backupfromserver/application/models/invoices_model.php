<?php
class invoices_model extends CI_Model
{
 var $table = "invoices";
function __construct() 
{
parent::__construct();
}
public function getalldata($fieldname,$tablename)
{
$result=$this->db->select($fieldname)->from($tablename)->get()->result();
return $result;
}
function data_insert($tablename,$data)
{
$this->db->insert($tablename, $data);
}
public function row_delete_with_othertable($tablename,$condision)
{
   $this->db->where($condision);
   $this->db->delete($tablename); 
}

function row_delete($condision)
{
   $this->db->where($condision);
   $this->db->delete($this->table); 
}
public function countresult($condition)
{
 $result = $this->db->where($condition)->count_all_results('users');
 return $result;
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


?><?php
class accountant_model extends CI_Model
{
 var $table = "accountant";
function __construct() 
{
parent::__construct();
}
public function getalldata($fieldname,$tablename)
{
$result=$this->db->select($fieldname)->from($tablename)->get()->result();
return $result;
}
function data_insert($tablename,$data)
{
$this->db->insert($tablename, $data);
}
public function row_delete_with_othertable($tablename,$condision)
{
   $this->db->where($condision);
   $this->db->delete($tablename); 
}

function row_delete($condision)
{
   $this->db->where($condision);
   $this->db->delete($this->table); 
}
public function countresult($condition)
{
 $result = $this->db->where($condition)->count_all_results('accountant');
 return $result;
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