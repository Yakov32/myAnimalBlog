<?php

	class Core{


		public static function start(){

			require_once("Routes.php");

			$route = new Route($routes);
			$controller = $route->callController($_GET['url']);

			$controller->CreateView();
		}
	} 


 ?>