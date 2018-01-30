<?php

session_start();

define('DB_HOST','localhost');
define('DB_USER','UserAsset');
define('DB_PASS','UserAsset');
define('DB_NAME','assetsDB');
/*produccion
define('DB_USER','solution_survey');
define('DB_PASS','solution_survey');
define('DB_NAME','solution_survey');
*/
define('HTML_DIR','html/');
define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/demos/AssetStatistic/');
//define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/encuesta/');



require('models/class.Conexion.php');

?>