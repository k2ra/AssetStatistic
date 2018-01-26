<?php
/**
* 
*/
class AssetsData
{
	$db;

	public function __construct() {
		$this->db = new Conexion();
		
	}

	public function insertCoins(){
		$this->db->query("INSERT INTO tbl_assets SET id_token='$this->token'");
	}
}
?>