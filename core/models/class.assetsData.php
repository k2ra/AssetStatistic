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

	public function listCoinById(){
		$list = $this->db->query("SELECT id_token FROM tbl_assets");

		if($this->db->rows($list) > 0) {
				while($data = $this->db->recorrer($list)) {
					$resp[] = array("id" => $data["id_token"]);
				}
				
			}
			else
			{
				$resp = false;
				header('location: ?view=department&mode=add');
			}
			return $resp;

	}

}
?>