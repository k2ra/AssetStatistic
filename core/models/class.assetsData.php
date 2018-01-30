<?php
/**
* 
*/
class AssetsData
{
	private $db;

	public function __construct() {
		$this->db = new Conexion();
		
	}

	public function insertCoins($id,$symbol,$name,$twitter){
		$this->db->query("INSERT INTO tbl_assets SET id_token=$id, symbol='$symbol', name_token='$name', twitter='$twitter'");
		
		if($this->db->affected_rows>0){
	        	return "insertado";
	        	
	        } 
	        else {
	            return "abortado";
	        }
	}

}
?>