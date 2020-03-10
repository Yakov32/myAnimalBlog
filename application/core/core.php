<?php
	class Core{
		
		public static function start(){

			require_once("Routes.php");

			$route = new Route($routes);
			$controller = $route->callController($_GET['url']);

			
			$cont_method = $_GET["cont_method"];

			if(!empty($cont_method)){
				$controller->$cont_method();
			}

			$controller->CreateView();

			//echo "<pre>";
			//print_r($controller);
		}
	} 
 ?>