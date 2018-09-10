<!DOCTYPE html>
<html lang="en">
  <head></head>
  	<body>
		<?php
		require_once('TwitterAPIExchange.php');
		require_once('scrapTwitterName.php');
		$scrapping = new Scrapping();

		$settings = array(
		    'oauth_access_token' => "",
		    'oauth_access_token_secret' => "",
		    'consumer_key' => "",
		    'consumer_secret' => ""
		);


		$url = 'https://api.coinmarketcap.com/v1/ticker/';
		$html = file_get_contents($url);
		$data = json_decode($html,true); 
		//print_r($data); 

		
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
