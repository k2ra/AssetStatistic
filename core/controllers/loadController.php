<?php
require('core/models/class.assetsData.php');
//require('core/core.php');
$datos = new AssetsData();

/*if($datos="xyz"){
		$url2 = 'https://min-api.cryptocompare.com/data/all/coinlist';
			$html2 = file_get_contents($url2);
			$data2 = json_decode($html2,true); 
	
				foreach ($data2['Data'] as $key => $value) {
				//print_r($data2['Data'][$key]['Name']." ".$data2['Data'][$key]['CoinName']." ".$data2['Data'][$key]['Id']."<br>");
					$result = $datos->insertCoins($data2['Data'][$key]['Id'],$data2['Data'][$key]['Name'],$data2['Data'][$key]['CoinName'],"@");
					echo $result;
				}
	}*/

	$id=$datos->listCoinById();

print_r($id[0]['id']);
	//$urlApiFull = 'https://www.cryptocompare.com/api/data/coinsnapshotfullbyid/?id=';

		//$htmlById = file_get_contents($urlApiFull);
		//$dataById = json_decode($htmlById,true); 



?>