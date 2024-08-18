<?php
class Products_model extends CI_Model{

	function __construct(){
		parent::__construct();
}

public function insert($data){
if ($this->db->insert("productslist", $data)) {
return true;
}
}

public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('productslist');  
         return $query;  
      }  
public function delproducts($id){
        $this->db->where('id', $id);
        $this->db->delete('productslist');
      }

    }
?>