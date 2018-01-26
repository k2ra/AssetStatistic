<?php 
class Scrapping{

    public function __construct() {
       

    }
    // Definimos la función cURL
    public function curl($url) {
        $ch = curl_init($url); // Inicia sesión cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Configura cURL para devolver el resultado como cadena
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
        curl_close($ch); // Cierra sesión cURL
        return $info; // Devuelve la información de la función
    }

    public function twitterFinder ($currency){
        $sitioweb = $this->curl("https://coinmarketcap.com/currencies/$currency/");  // Ejecuta la función curl escrapeando el sitio web https://devcode.la and regresa el valor a la variable $sitioweb
        //echo $sitioweb;
        //preg_match_all('/<a class="customisable-highlight" href="(.*?)"/', $sitioweb, $matches);
         //preg_match_all('/(<div id="social".*>)(.*)/', $sitioweb, $matches);
        preg_match_all('/Tweets by.*/', $sitioweb, $matches);
        
        //$a = $matches[0];
        print_r($matches);
       // return $a;
      // return $matches;
       
    /*
        $url = $_POST['url'];
        $html = file_get_contents($url);
       // $data = json_decode($html,true);
        echo $html;*/
        
       // print_r($matches);

    }
}
?>
