<!DOCTYPE html>
<html lang="en">
  <head></head>
  	<body>
		<?php
		require_once('TwitterAPIExchange.php');
		require_once('scrapTwitterName.php');
		$scrapping = new Scrapping();

		$settings = array(
		    'oauth_access_token' => "286847247-EExFfE33wSeas2xjLk6SRZRggiFdJHTlt3woBK72",
		    'oauth_access_token_secret' => "BzITpCjWR0zQIFLTidXgzgGrOBZyyZsjPuMVDEZMgLedF",
		    'consumer_key' => "K4YnsICogHxcnnaJPWfoZu8Jt",
		    'consumer_secret' => "b3QJxiLr1njYQCWfvbCN1rPcpZM02qFR7xgHPIlN276vV9nkh6"
		);


		$url = 'https://api.coinmarketcap.com/v1/ticker/';
		$html = file_get_contents($url);
		$data = json_decode($html,true); 
		//print_r($data); 

		$url2 = 'https://min-api.cryptocompare.com/data/all/coinlist';
		$html2 = file_get_contents($url2);
		$data2 = json_decode($html2,true); 

			foreach ($data2['Data'] as $key => $value) {
			print_r($data2['Data'][$key]['Name']." ".$data2['Data'][$key]['CoinName']." ".$data2['Data'][$key]['Id']."<br>");
			}
		?>


		<table class="table table-striped  projects">
		        <thead>
		          <th>Name</th>
		          <th>Symbol</th>
		          <th>price</th>
		          <th>marketcap</th>
		          <th>supply</th>
		          <th>change1h</th>
		          <th>twittr</th>
		        </thead>
		          <tbody>



		                   
		<?php
		//print_r($data);
		/*if(false != $data) {
			foreach ($data as $key => $value) {
				$name = $data[$key ]["name"];
//$twitter =$scrapping->twitterFinder("ethereum");
				
			  //echo ""$resp[$key ]['preguntas'];
			  echo '<tr><td><b>'.$data[$key ]["name"].'</b></td>';
			  echo '<td>'.$data[$key ]["symbol"].'</td>';
			  echo '<td>'.$data[$key ]["price_usd"].'</td>';
			  echo '<td>'.$data[$key ]["market_cap_usd"].'</td>';
			  echo '<td>'.$data[$key ]["total_supply"].'</td>';
			  echo '<td>'.$data[$key ]["percent_change_1h"].'</td>';
			 // echo '<td>'.$twitter[0][0].'</td>';
			}
		}*/
		/*$i = 0;

		//while ($i < count($data)) {
		while ($i <10) {
			//print_r($data[$i]["id"]);
			$twitter =$scrapping->twitterFinder($data[$i]["id"]);
			echo $twitter;
			//print_r($twitter);
			$i++;
		}*/
		//echo count($data);
//echo $twitter[0][0];
	//	 print_r($scrapping->twitterFinder("ethereum"));
		$url = 'https://api.twitter.com/1.1/users/search.json';
		$getfield = '?q=krojas30';
		//$getfield = '?screen_name=krojas30&skip_status=true&include_user_entities=false';        
		$requestMethod = 'GET';
		$twitter = new TwitterAPIExchange($settings);
		$json =  $twitter->setGetfield($getfield)
		                     ->buildOauth($url, $requestMethod)
		                     ->performRequest();

		  $followers = json_decode($json,true);

		 // $count = 0;
		  foreach ($followers as $key => $value) {
		  	//$count +=1;
		 	print_r( $followers[$key]["name"]." ".$followers[$key]["screen_name"]." ".$followers[$key]["followers_count"]."<br>");
		  }
		  //echo $count;
		// print_r(json_decode($json,true));
		?>
		      </tbody>
		 </table>                 
	</body>
</html>
