<?php
class country_model extends CI_Model
{
private $table = "country";
function __construct() 
{

parent::__construct();
}
public function getdata($fieldname)
{
 $result=$this->db->select($fieldname)->from($this->table)->get()->result();
 $country=array();
 foreach($result as $row)
 {
 $country[$row->id]=$row->country_name;
 }
 return $country;
}
}

?>