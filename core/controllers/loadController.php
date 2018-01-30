<?php
require('../models/class.assetsData.php');
require('../core.php');
$datos = new AssetsData();

$url2 = 'https://min-api.cryptocompare.com/data/all/coinlist';
		$html2 = file_get_contents($url2);
		$data2 = json_decode($html2,true); 

			foreach ($data2['Data'] as $key => $value) {
			//print_r($data2['Data'][$key]['Name']." ".$data2['Data'][$key]['CoinName']." ".$data2['Data'][$key]['Id']."<br>");
				$result = $datos->insertCoins($data2['Data'][$key]['Id'],$data2['Data'][$key]['Name'],$data2['Data'][$key]['CoinName'],"@");
				echo $result;
			}



?>